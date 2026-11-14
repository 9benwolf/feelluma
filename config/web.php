<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

date_default_timezone_set('America/New_York');
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@views' => '@app/views',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'voJ3ZQvwbmmEB3A_sw3gXPEpkhxgJ-kv',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        // 'mailer' => [
        //     'class' => \yii\symfonymailer\Mailer::class,
        //     'viewPath' => '@app/mail',
        //     // send all mails to a file by default.
        //     'useFileTransport' => true,
        // ],

        'mailer' => [
            'class' => 'yii\symfonymailer\Mailer',
            'viewPath' => '@app/mail',
            'useFileTransport' => false, // false to send real emails
            'transport' => [
                'scheme' => 'smtp',
                'host' => 'smtp.protonmail.ch',
                'username' => 'contact@feelluma.com',
                // 'password' => 'DNG6U3tmf^4xx&pr3W#^' password below is working, generated at protonmail,
                'password' => 'L4K3Z6VY4M2JSRPV',
                'port' => 587,
                'encryption' => 'tls',
                'auth_mode' => 'login',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'assetManager' => [
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets',
            'appendTimestamp' => true, // cache busting
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],
    ],
    'modules' => [
        'admin' => ['class' => 'app\modules\admin\Admin',],
    ],
    'params' => $params,
    'timeZone' => 'America/New_York'
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
