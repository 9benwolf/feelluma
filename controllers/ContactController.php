<?php

namespace app\controllers;

use Yii;
use app\models\Forms\ContactForm;

class ContactController extends BaseController
{
    public function actionIndex()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                if ($model->sendEmail()) {
                    Yii::$app->session->setFlash('success', 'Message sent successfully!');
                } else {
                    Yii::$app->session->setFlash('error', 'Failed to send message.');
                }
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', 'Error sending message: ' . $e->getMessage());
            }

            return $this->refresh(); // prevent resubmit
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }
}
