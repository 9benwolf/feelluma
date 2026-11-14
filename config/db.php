<?php

$host = env('DB_HOST', '127.0.0.1');
$dbName = env("DB_NAME", 'yii');
$dbPort = env("DB_PORT", 3306);
$dbUser = env("DB_USER", 'root');
$dbPassword = env("DB_PASS");

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=$host;dbname=$dbName;port=$dbPort",
    'username' => $dbUser,
    'password' => $dbPassword,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
