<?php

namespace app\controllers;

class SiteController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * A Variant Page with a disabled navbar
     */
    public function actionVariantPage()
    {
        // pwede ganito
        $this->showNavbar(false);

        // pwede din to
        //$this->mergeToParams([
        //    'showNavbar' => false
        //]);

        // ETO DEFAULT
        // $this->view->params['showNavbar'] = false;

        // setting page title
        $this->setTitle("HAHAHAHA");
        return $this->render('about');
    }


    /**
     * Renders the variant landing page with the navbar disabled.
     */
    public function actionSampleLandingPage()
    {
        /**
         * Uses the @views alias to reference a view located outside
         * the default "site" controller view directory.
         */
        return $this->render('@views/sample/landing');
    }
}
