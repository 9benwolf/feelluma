<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $campaignId
 * @property string $transactionNumber
 * @property int $status
 * @property double $amount
 * @property string $email
 * @property string $firstName
 * @property string $lastName
 * @property string $phone
 * @property string $avsCode
 * @property string $shippingAddress1
 * @property string $shippingZip
 * @property string $shippingCity
 * @property string $shippingCountry
 * @property string $shippingState
 * @property int $billingSameAsShipping
 * @property string $billingAddress1
 * @property string $billingZip
 * @property string $billingCity
 * @property string $billingCountry
 * @property string $billingState
 * @property string $creditCardType
 * @property string $expirationDate
 * @property string $cardNumber
 * @property string $cvv
 * @property string $last4
 * @property int $isExpeditedShipping
 * @property string $promo_code
 * @property string $adgroupid
 * @property string $keyword
 * @property string $utm_campaign
 * @property string $utm_content
 * @property string $payment_processor
 * @property string $sms_terms
 * @property string $ip_address
 * @property float $apiDuration
 * @property string $authCode
 * @property string $errorMessage
 * @property integer $updated_at
 * @property integer $created_at
 *
 *
 */
class Orders extends \yii\db\ActiveRecord
{
    const STATUS_PENDING = 1;
    const STATUS_CONFIRMED = 2;
    const STATUS_FAILED = 3;
    const STATUS_CANCELED = 4;

    public function extraFields()
    {
        return ['products'];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => function () {
                    return time();
                },
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'campaignId', 'status', 'billingSameAsShipping', 'isExpeditedShipping', 'sms_terms', 'created_at', 'updated_at'], 'integer'],
            [['status'], 'required'],
            [['amount'], 'number'],
            [['errorMessage', 'gatewayId', 'apiDuration', 'shippingId', 'shippingAmount', 'mid', 'cardNumber', 'cvv', 'authCode'], 'safe'],
            [['transactionNumber', 'email', 'firstName', 'lastName', 'phone', 'avsCode', 'shippingAddress1', 'shippingZip', 'shippingCity', 'utm_campaign', 'utm_content','shippingCountry', 'shippingState', 'billingAddress1', 'billingZip', 'billingCity', 'billingCountry', 'billingState', 'creditCardType', 'last4', 'expirationDate', 'promo_code', 'adgroupid', 'keyword', 'payment_processor', 'ip_address'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'campaignId' => 'Campaign ID',
            'transactionNumber' => 'Transaction Number',
            'status' => 'Status',
            'amount' => 'Amount',
            'email' => 'Email',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'phone' => 'Phone',
            'avsCode' => 'AVS',
            'shippingAddress1' => 'Shipping Address1',
            'shippingZip' => 'Shipping Zip',
            'shippingCity' => 'Shipping City',
            'shippingCountry' => 'Shipping Country',
            'shippingState' => 'Shipping State',
            'billingSameAsShipping' => 'Billing Same As Shipping',
            'billingAddress1' => 'Billing Address1',
            'billingZip' => 'Billing Zip',
            'billingCity' => 'Billing City',
            'billingCountry' => 'Billing Country',
            'billingState' => 'Billing State',
            'creditCardType' => 'Credit Card Type',
            'last4' => 'Last4',
            'expirationDate' => 'Expiration Date',
            'isExpeditedShipping' => 'Is Expedited Shipping',
            'promo_code' => 'Promo Code',
            'adgroupid' => 'Ad Group Id',
            'keyword' => 'Keyword',
            'utm_campaign' => 'UTM Campaign',
            'utm_content' => 'UTM Content',
            'ip_address' => 'IP Address',
            'payment_processor' => 'Payment Processor',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function showStatus(){
        if($this->status == self::STATUS_PENDING){
            return 'Pending';
        }elseif ($this->status == self::STATUS_CONFIRMED){
            return 'Confirmed';
        }elseif ($this->status == self::STATUS_FAILED){
            return 'Failed ('.$this->errorMessage.')';
        }elseif ($this->status == self::STATUS_CANCELED){
            return 'Canceled';
        }
    }

    public static function getStatusMap(){
        $resp = [];
        $resp[self::STATUS_PENDING] = 'Pending';
        $resp[self::STATUS_CONFIRMED] = 'Confirmed';
        $resp[self::STATUS_FAILED] = 'Failed';
        $resp[self::STATUS_CANCELED] = 'Canceled';

        return $resp;
    }

    public function getItems(){
        return OrderItems::findAll(['orderId' => $this->id]);
    }

    public function getProducts(){
        return $this->hasMany(OrderItems::class, ['orderId' => 'id']);
    }
    public static function countDeclinedOrdersByCampaign($campaignId){
        return Orders::find()
            ->where(['campaignId' => $campaignId])
            ->andWhere(['!=','status', '2'])
            ->count();
    }

    static public function createOrder(
        $params,
        $products,
        $shippingId,
        $shippingAmount,
        $paypal = FALSE
    ) {
        $order = new Orders();
        $order->status = Orders::STATUS_PENDING;
        $order->payment_processor = $params['payment_processor'];

        $expDate = $params->expirationDate ?? $params['fields_expmonth'] . '/' . $params['fields_expyear'];

        if($order->payment_processor == 'credit_card'){
            $order->creditCardType = $params['creditCardType'];
            $order->cardNumber = $params['cardNumber'];
            $order->expirationDate = $expDate;
            $order->cvv = $params['cvv'];
        }

        if (isset($params['keyword']) && (trim($params['keyword']) !== '')) {
            $order->keyword = $params['keyword'];
        }
        if (isset($params['adgroupid']) && (trim($params['adgroupid']) !== '')) {
            $order->adgroupid = $params['adgroupid'];
        }
        if (isset($params['utm_campaign']) && (trim($params['utm_campaign']) !== '')) {
            $order->utm_campaign = $params['utm_campaign'];
        }
        if (isset($params['utm_content']) && (trim($params['utm_content']) !== '')) {
            $order->utm_content = $params['utm_content'];
        }

        $order->ip_address = Yii::$app->request->userIP;

        $order->firstName        = $params['firstName'];
        $order->lastName         = $params['lastName'];
        $order->email            = $params['email'];
        $order->phone            = $params['phone'];
        $order->shippingZip      = $params['shippingZip'];
        $order->shippingAddress1 = $params['shippingAddress1'];
        $order->shippingCity     = $params['shippingCity'];
        $order->shippingCountry  = $params['shippingCountry'];
        $order->shippingState    = $params['shippingState'];

        if ($params['billingSameAsShipping'] === 'NO') {
            $order->billingSameAsShipping = 0;
            $order->billingZip            = $params['billingZip'];
            $order->billingAddress1       = $params['billingAddress1'];
            $order->billingCity           = $params['billingCity'];
            $order->billingCountry        = $params['billingCountry'];
            $order->billingState          = $params['billingState'];
        }

        $order->sms_terms = isset($params['sms_terms']) ? 1 : 0;

        $order->amount = 0;
        $order->save();


        $totalAmount = 0;
        foreach ($products as $item) {
            $orderItems            = new OrderItems();
            $orderItems->orderId   = $order->id;
            $orderItems->productId = $item['id'];
            $orderItems->name      = $item['name'];
            $orderItems->quantity  = 1;
            $orderItems->amount    = $item['amount'];
            $orderItems->save();
            $totalAmount += floatval($orderItems->amount);
        }
        $totalAmount += floatval($shippingAmount);
        $order->shippingId = $shippingId;
        $order->shippingAmount = $shippingAmount;
        $order->amount = $totalAmount;

        $order->save();

        return $order->id;
    }

}
