<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\widgets\ActiveForm;

class ShippingController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('shipping', []);
    }
}
