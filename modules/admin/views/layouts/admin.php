<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AdminAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AdminAsset::register($this);


?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet"
              href="/assets/vendor/fontawesome-free/css/all.min.css">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!--      <link rel="stylesheet" href="/css/style.css">-->
        <script type="text/javascript">
            WebFontConfig = {
                google: {families: ['Open Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Open Sans Condensed:700', 'Oswald:200,300,400,500,600,700', 'Shadows Into Light',]},
                custom: {
                    families: ['Font Awesome 5 Brands:400', 'Font Awesome 5 Free:400,900'],
                }
            };
            (function (d) {
                var wf = d.createElement('script'), s = d.scripts[0];
                wf.src = '/assets/js/webfont.js';
                wf.async = true;
                s.parentNode.insertBefore(wf, s);
            })(document);
        </script>


    </head>
    <body>
    <?php $this->beginBody() ?>


    <div class="wrap" id="admin">

        <?php
        NavBar::begin([
            'brandLabel' => 'LC Light',           // Text or HTML
            'brandUrl' => Yii::$app->homeUrl,   // Where "brand" link goes
            'options' => [
                'class' => 'navbar navbar-expand-lg navbar-light bg-light',
            ],
        ]);

        if (!Yii::$app->user->isGuest):
            echo Nav::widget([
                'items'   => [


                    ['label'   => 'Orders',
                        'options' => ['class' => 'nav-item dropdown'],

                        'items' => [['label' => 'All Orders',
                            'url'   => ['/admin/orders']],

                            ['label' => 'Auth Net',
                                'url'   => ['/admin/orders?OrderSearch%5Bpayment_processor%5D=credit_card']],
                            ['label' => 'Paypal',
                                'url'   => ['/admin/orders?OrderSearch%5Bpayment_processor%5D=paypal']],],],
                    ['label'       => 'Auth Gateways',
                        'url'         => ['/admin/auth-gateways'],
                        'linkOptions' => [],],

                    ['label' => 'Order Step One',
                        'url'   => ['/admin/order-step-one']],
                    ['label'   => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url'     => ['/admin/default/logout'],
                        'visible' => !Yii::$app->user->isGuest],],


                // set this to nav-tab to get tab-styled navigation
            ]);
        endif;

        NavBar::end();


        ?>


        <div class="container-fluid">
            <?= $content ?>
        </div>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>