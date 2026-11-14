<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\widgets\ActiveForm;
use app\models\Forms\UpsellForm;
use app\models\Orders;
use app\helpers\AuthHelper;
use app\helpers\UtilityHelper;
use app\models\Forms\LeadGenForm;
use app\models\OrderStepOne;
use yii\helpers\Url;

class EasySleepController extends BaseController
{
    private $payment_processor;
    private $session;

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->session = Yii::$app->session;
        $this->session->open();
    }

    public function actionOrder()
    {
        $this->hideNavbar();
        $this->hideFooter();
        $model = new \app\models\Forms\OrderForm();

        if (! Yii::$app->request->isAjax && $this->session->has('lead-gen')) {
            $old['OrderForm'] = $this->session->get('lead-gen');
            $model->load($old); // we put old data into the forms
        }

        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }

        return $this->render('order', ['model' => $model]);
    }
    public function actionStepOne()
    {
        $model = new OrderStepOne();

        $order_form        = Yii::$app->request->post();
        $r['OrderStepOne'] = $order_form['OrderForm'];

        if ($model->load($r) && $model->save()) {
            if (OrderStepOne::findOne(['email' => trim($model->email)])) {
                return "Already Saved";
            }

            $model->ip_address = UtilityHelper::getClientIp();
            $model->save();

            return Yii::$app->response->content = 200;
        } else {
            //var_dump($model->errors);
            return Yii::$app->response->content = "Error on Save";
        }
    }

    //ILC
    public function actionAutoSaveStepOne()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $post = Yii::$app->request->post('OrderForm', []);

        if (empty($post)) {
            return [
                'success' => false
            ];
        }

        $session = Yii::$app->session;

        // Try to get existing autosave record id
        $orderStepOneId = $session->get('order_step_one_id');

        if ($orderStepOneId) {

            $model = OrderStepOne::findOne($orderStepOneId);
        }

        // If no existing record found
        if (empty($model)) {

            $model = new OrderStepOne();
        }

        // Assign only submitted fields
        foreach ($post as $key => $value) {

            if ($model->hasAttribute($key)) {
                $model->$key = $value;
            }
        }

        $model->ip_address = UtilityHelper::getClientIp();

        // Save without validation
        if ($model->save(false)) {

            // Save id into session
            $session->set('order_step_one_id', $model->id);

            return [
                'success' => true,
                'id' => $model->id
            ];
        }

        return [
            'success' => false
        ];
    }

    public function actionMakeOrder()
    {
        $model = new \app\models\Forms\OrderForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $this->payment_processor = $model->payment_processor;

            $shippingId     = isset($_REQUEST['shippingId']) ? $this->shippingId() : '5';
            $shippingAmount = isset($_REQUEST['shippingId']) ? $this->shippingAmount() : '0';
            $model->cardNumber = isset($model->cardNumber) ? str_replace('-', '', $model->cardNumber) : FALSE;

            $model->billingSameAsShipping = 'YES';

            /* ----- Decline Prompt ----- */
            // Ban IP addresses
            $ip_address_block = ['212.102.40.146', '156.146.38.144', '69.167.11.217'];

            if (in_array(UtilityHelper::getClientIp(), $ip_address_block, true)) {
                return Yii::$app->response->content = "YOU ARE BANNED!";
            }

            $date_utc = new \DateTime("now", new \DateTimeZone("America/New_York"));

            $tosub = new \DateInterval('PT1H');
            $date_utc->sub($tosub);

            $utcTimestamp = $date_utc->getTimestamp();

            if (
                Orders::find()
                ->where(['email' => $model->email])
                ->andWhere(['status' => Orders::STATUS_FAILED])
                ->andWhere(['>=', 'created_at', $utcTimestamp])
                ->count() >= 5
            ) {
                $response['status'] = 400;
                $response['message'] = 'Oops...There seems to be an issue with your order, Please call Customer Service at ' . Yii::$app->params['PhoneNumber'] . ' to process your order.';
                return Yii::$app->response->content = $response['message'];
            }
            /* ----- End ----- */

            $init_order_id = Orders::createOrder(
                $model,
                $this->getProducts(),
                $shippingId,
                $shippingAmount
            );

            if ($model->payment_processor == 'credit_card') {
                AuthHelper::doPayment($init_order_id);
            }

            $order = Orders::findOne($init_order_id);

            if ($model->payment_processor == 'paypal' && isset($_REQUEST['pp_subscription_id'])) {
                $_SESSION['previous_order'] = [];
                $_SESSION['previous_order']['id'] = $order->id;
                $_SESSION['previous_order']['payment_processor'] = $order->payment_processor;
                $order->pp_subscription_id = $_REQUEST['pp_subscription_id'];
                $order->save();

                return;
            }

            if ($order) {
                if ($order->status == Orders::STATUS_CONFIRMED) {
                    $_SESSION['previous_order'] = [];
                    $_SESSION['previous_order']['id'] = $order->id;
                    $_SESSION['previous_order']['payment_processor'] = $order->payment_processor;
                    $next_page = $_REQUEST['next_page'] ?? Url::to(['/thankyou']);

                    $return = ['status' => '100', 'redirect_to' => $next_page];

                    return Yii::$app->response->content = json_encode($return);
                } else {
                    //   return Yii::$app->response->content = $order->errorMessage;
                    return Yii::$app->response->content = '
                    <div class="size-12 bg-red-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-bold">
                        ✕
                    </div>
                    
                    <h2 class="text-xl text-center font-bold text-red-500 mb-2">Payment Not Completed</h2>
                    
                    <hr class="border-t border-gray-800 my-2.5">
                    
                    <p class="text-base text-gray-800 font-semibold mb-2.5">
                        Banks sometimes need a quick check for online purchases.
                    </p>
                    
                    <p class="text-base mb-2.5">Try this:</p>
                    
                    <ul class="text-left text-base list-none p-0 mb-5">
                        <li class="mb-1.5">✅ Try again in 10–15 seconds</li>
                        <li class="mb-1.5">✅ Check your phone for a bank prompt</li>
                        <li class="mb-1.5">✅ Confirm your billing address</li>
                        <li class="mb-1.5">✅ Contact your card issuer if it keeps declining</li>
                        <li class="mb-1.5">✅ Use a different card</li>
                    </ul>
                    
                    <p class="text-red-500 text-center text-xl font-bold mb-5">
                        No charges were made.
                    </p>';
                }
            }
        } else {
            $errors = '';
            foreach ($model->errors as $field => $error) {
                $errors .= $model->getAttributeLabel($field) . ': ' . $error[0] . '<br>';
            }
            return Yii::$app->response->content = $errors;
        }
    }

    public function getProducts()
    {
        $products = [];
        if ($pr = Yii::$app->request->post('product_id')) {
            if (is_array($pr)) {
                foreach ($pr as $pro) {
                    $product = Yii::$app->params[$pro] ?? NULL;
                    if ($product) {

                        $product_amount = $product['amount'];
                        $product_name   = $product['name'];

                        $productId = $this->payment_processor == 'paypal' ? $product['pp'] : $product['id'];

                        $products[] = [
                            'id'     => $productId,
                            'name'   => $product_name,
                            'amount' => $product_amount,
                        ];
                    }
                }
                return $products;
            } else {
                $product = Yii::$app->params[Yii::$app->request->post('product_id')] ?? NULL;
                if ($product) {

                    $product_amount = $product['amount'];
                    $product_name   = $product['name'];

                    $productId = $this->payment_processor == 'paypal' ? $product['pp'] : $product['id'];

                    $products[] = [
                        'id'     => $productId,
                        'name'   => $product_name,
                        'amount' => $product_amount,
                    ];

                    return $products;
                }
            }
        }
    }

    public function actionThankyou()
    {
        $this->hideNavbar();
        // $this->hideFooter();
        return $this->render('thankyou');
    }

    public function actionIndex()
    {
        return $this->render('index', []);
    }

    public function actionS2()
    {
        return $this->render('s2', []);
    }

    public function actionUpsell()
    {
        $this->hideNavbar();
        $this->hideFooter();
        $model = new \app\models\Forms\UpsellForm();

        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }
        return $this->render('upsell', ['model' => $model]);
    }

    public function actionUpsell1m()
    {
        $this->hideNavbar();
        $this->hideFooter();

        $model = new \app\models\Forms\OrderForm();

        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }

        return $this->render('upsell1m', ['model' => $model]);
    }

    public function actionUpsellProcess()
    {
        Yii::$app->session->open();
        $model = new UpsellForm();
        if ($model->load(\Yii::$app->request->post()) && $model->previous_order_id == $_SESSION['previous_order']['id']) {
            if ($model->validate()) {


                $prev_order = Orders::find()->where(['id' => $model->previous_order_id])->asArray()->one();

                if ($prev_order['payment_processor'] == 'credit_card') {
                    $prev_order['fields_expmonth'] = substr($prev_order['expirationDate'], 0, 2);
                    $prev_order['fields_expyear'] = substr($prev_order['expirationDate'], 3, 2);
                }
                $prev_order['terms'] = 1;

                Yii::$app->request->setBodyParams(['OrderForm' => $prev_order, 'product_id' => $model->product_id]);

                return $this->actionMakeOrder();
            } else {
                $errors = '';
                foreach ($model->errors as $field => $error) {
                    $errors .= $model->getAttributeLabel($field) . ': ' . $error[0] . '<br>';
                }

                return Yii::$app->response->content = $errors;
            }
        } else {
            return Yii::$app->response->content = "Not Valid Previous Order";
        }
    }

    public function actionThankyouNo()
    {
        $this->hideNavbar();
        $model = new \app\models\Forms\UpsellForm();

        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }

        return $this->render('thankyou-no', ['model' => $model]);
    }
}
