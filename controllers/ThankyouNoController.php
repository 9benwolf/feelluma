<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Forms\UpsellForm;
use app\models\Orders;
use yii\web\Response;
use yii\widgets\ActiveForm;

class ThankyouNoController extends BaseController
{
    public function actionIndex()
    {
        $this->hideNavbar();
        $this->hideFooter();
        $model = new \app\models\Forms\UpsellForm();

        // validate any AJAX requests fired off by the form
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }

        return $this->render('thankyouno', ['model' => $model]);
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
}
