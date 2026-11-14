<?php

namespace app\controllers;

use app\helpers\AuthHelper;
use app\helpers\UtilityHelper;
use app\models\Forms\LeadGenForm;
use app\models\Forms\UpsellForm;
use app\models\Orders;
use app\models\OrderStepOne;
use Yii;
use yii\helpers\Url;
use yii\web\Response;
use yii\widgets\ActiveForm;

class Upsell1mController extends BaseController
{
    private $payment_processor;

    public function actionIndex()
    {
        $this->hideNavbar();
        $this->hideFooter();

        $model = new \app\models\Forms\OrderForm();

        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }

        return $this->render('index', ['model' => $model]);
    }
}
