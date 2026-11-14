<?php

if (! function_exists('env')) {
    function env(string $key, $default = null)
    {
        return $_ENV[$key] ?? $default;
    }
}

if (! function_exists('s3_asset')) {
    function s3_asset(string $key, $default = null)
    {
        return env('S3_BUCKET') . $key;
    }
}

if (! function_exists('request')) {
    function request(): \yii\web\Request
    {
        return \Yii::$app->request;
    }
}

if (! function_exists('params')) {
    function params($key, $default = null)
    {
        return isset(\Yii::$app->params[$key]) ? \Yii::$app->params[$key] : $default;
    }
}

if (! function_exists('withTracking')) {

    function withTracking($url)
    {
        return Yii::$app->tracking->decorate($url);
    }
}
