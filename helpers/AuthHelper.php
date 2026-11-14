<?php

namespace app\helpers;

use app\models\Orders;
use Exception;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use app\models\AuthGateways;

class AuthHelper
{
    static public function getAuthorizeMerchant($gateway) {

        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();

        $loginId        = $gateway->loginId;
        $transactionKey = $gateway->transactionKey;

        $merchantAuthentication->setName($loginId);
        $merchantAuthentication->setTransactionKey($transactionKey);

        return $merchantAuthentication;
    }

    static public function getAuthorizeMode() {

        if (UtilityHelper::getCustomParameters('authorize.mode') == 'live') {
            return \net\authorize\api\constants\ANetEnvironment::PRODUCTION;
        }

        return \net\authorize\api\constants\ANetEnvironment::SANDBOX;
    }

    static public function getWeightedGateway(
        $cardType = FALSE,
        $is_gateway = FALSE
    ) {
        if ($is_gateway !== FALSE) {
            return AuthGateways::getGatewayByCampaign($cardType);
        } else {
            return AuthGateways::getGateway($cardType);
        }
    }

    static public function doPayment($orderId, $is_gateway = FALSE) {

        $order   = Orders::findOne($orderId);

        $gateway = self::getWeightedGateway(
            $order->creditCardType,
            $is_gateway
        );

        if ($gateway === FALSE) {
            $order->status = Orders::STATUS_FAILED;
            $order->save();

            return;
        }

        $order->mid = $gateway->mid;
        $order->save();

        // Common setup for API credentials
        $merchantAuthentication = self::getAuthorizeMerchant($gateway);
        $refId = 'ORDER # ' . $order->id;

        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($order->cardNumber);

        $expiration = explode('/', $order->expirationDate);

        $expirationDate = '20' . $expiration[1] . '-' . $expiration[0];

        $creditCard->setExpirationDate($expirationDate);

        // Create order information
        $orderInfo = new AnetAPI\OrderType();
        $orderInfo->setInvoiceNumber($refId);
        $userItems = $order->getItems();

        $elems     = [];
        foreach ($userItems as $item) {
            $suffix = '';
            if ($item->productId > 0) {
                $suffix = ' (' . $item->productId . ')';
            }
            //$elems[] = $item->name . $suffix;
            $elems[] = $item->productId;
        }
        $description = implode(', ', $elems);

        $orderInfo->setDescription($description);

        // Set the customer's Bill To address
        $customerAddress = new AnetAPI\CustomerAddressType();
        $customerAddress->setFirstName($order->firstName);
        $customerAddress->setLastName($order->lastName);
        //$customerAddress->setCompany("Souveniropolis");
        $customerAddress->setEmail($order->email);
        $customerAddress->setPhoneNumber($order->phone);
        $customerAddress->setAddress($order->shippingAddress1);
        $customerAddress->setCity($order->shippingCity);
        $customerAddress->setState($order->shippingState);
        $customerAddress->setZip($order->shippingZip);
        $customerAddress->setCountry($order->shippingCountry);

        if (isset($order->billingSameAsShipping) && $order->billingSameAsShipping == 0) {
            // Set the customer's Shipping To address
            $customerAddress = new AnetAPI\CustomerAddressType();
            $customerAddress->setFirstName($order->firstName);
            $customerAddress->setLastName($order->lastName);
            //$customerAddress->setCompany("Souveniropolis");
            $customerAddress->setAddress($order->shippingAddress1);
            $customerAddress->setCity($order->shippingCity);
            $customerAddress->setState($order->shippingState);
            $customerAddress->setZip($order->shippingZip);
            $customerAddress->setCountry($order->shippingCountry);

            // Set the customer's billing To address
            $billTo = new AnetAPI\CustomerAddressType();
            $billTo->setFirstName($order->firstName);
            $billTo->setLastName($order->lastName);
            $billTo->setEmail($order->email);
            $billTo->setPhoneNumber($order->phone);
            $billTo->setAddress($order->billingAddress1);
            $billTo->setCity($order->billingCity);
            $billTo->setState($order->billingState);
            $billTo->setZip($order->billingZip);
            $billTo->setCountry($order->billingCountry);
        } else {
            // Set the customer's Bill To address
            $customerAddress = new AnetAPI\CustomerAddressType();
            $customerAddress->setFirstName($order->firstName);
            $customerAddress->setLastName($order->lastName);
            //$customerAddress->setCompany("Souveniropolis");
            $customerAddress->setEmail($order->email);
            $customerAddress->setPhoneNumber($order->phone);
            $customerAddress->setAddress($order->shippingAddress1);
            $customerAddress->setCity($order->shippingCity);
            $customerAddress->setState($order->shippingState);
            $customerAddress->setZip($order->shippingZip);
            $customerAddress->setCountry($order->shippingCountry);
        }

        // Set the customer's identifying information
        $customerData = new AnetAPI\CustomerDataType();
        $customerData->setType("individual");
        //$customerData->setId("99999456654");
        $customerData->setEmail($order->email);


        // Add values for transaction settings
        $duplicateWindowSetting = new AnetAPI\SettingType();
        $duplicateWindowSetting->setSettingName("duplicateWindow");
        $duplicateWindowSetting->setSettingValue("60");


        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        // Create a transaction
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount($order->amount);
        $transactionRequestType->setPayment($paymentOne);

        $transactionRequestType->setOrder($orderInfo);
        if (isset($billTo)) {
            $transactionRequestType->setBillTo($billTo);

            $transactionRequestType->setShipTo($customerAddress);
        } else {
            $transactionRequestType->setBillTo($customerAddress);
        }
        $transactionRequestType->setCustomerIP($order->ip_address);

        $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);

        $time_start = microtime(true);

        try {
            $response = $controller->executeWithApiResponse(self::getAuthorizeMode());
            $time_end = microtime(true);

            $order->apiDuration = number_format($time_end - $time_start, 2);
        }catch (Exception $exception){
            //echo  "Charge Credit Card Null response returned";
            $time_end = microtime(true);

            $order->apiDuration = number_format($time_end - $time_start, 2);
            $order->errorMessage = 'Auth.net Failed to create transaction';
            $order->status = Orders::STATUS_FAILED;
            $order->save();
        }

        $order->campaignId = $gateway->campaignId;

        if ($response != NULL) {
            if ($response->getMessages()->getResultCode() == "Ok") {

                $tresponse = $response->getTransactionResponse();

                if ($tresponse->getAvsResultCode() != NULL) {
                    $order->avsCode = $tresponse->getAvsResultCode();
                }

                if ($tresponse != null && $tresponse->getMessages() != null) {
                    $order->status            = Orders::STATUS_CONFIRMED;
                    $order->transactionNumber = $tresponse->getTransId();
                    $order->authCode          = $tresponse->getAuthCode();

                    $order->save();
                }else{
                    $order->status       = Orders::STATUS_FAILED;
                    $order->errorMessage = "Transaction Failed | ";
                    if ($tresponse->getErrors() != null) {
                        $order->errorMessage .= "[".$tresponse->getErrors()[0]->getErrorCode()."]";
                        $order->errorMessage .= " Error Message:" . $tresponse->getErrors()[0]->getErrorText();
                    }
                    $order->save();
                }
            }else{
                $order->status       = Orders::STATUS_FAILED;
                $order->errorMessage = "Transaction Failed NOT-OK | ";
                $tresponse = $response->getTransactionResponse();

                if ($tresponse != null && $tresponse->getErrors() != null) {
                    $order->errorMessage .= "[" . $tresponse->getErrors()[0]->getErrorCode() . "]";
                    $order->errorMessage .= " Error Message : " . $tresponse->getErrors()[0]->getErrorText();
                } else {
                    $order->errorMessage .=  "[". $response->getMessages()->getMessage()[0]->getCode() .  "]";
                    $order->errorMessage .= " Error Message : " . $response->getMessages()->getMessage()[0]->getText();
                }
                $order->save();

            }
        } else {
            //echo  "Charge Credit Card Null response returned";
            $order->errorMessage = 'Charge Credit Card Null response returned';
            $order->status = Orders::STATUS_FAILED;
            $order->save();
        }
    }
}


