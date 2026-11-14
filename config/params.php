<?php

/**
 * Careful with included files, make sure array keys are not duplicate as it will overwrite
 */
$order1Products =  require __DIR__ . '/products/order1Products.php';


return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'salt' => '$2a$10$Q7qlnTFPwKq4D6csshB3n5',
    'site_id_mid' => env('SITE_ID_MID'),

    'aws_access_key_id' => env('AWS_ACCESS_KEY_ID'),
    'aws_secret_access_key' => env('AWS_SECRET_ACCESS_KEY'),
    'aws_default_region' => env('AWS_DEFAULT_REGION'),
    'aws_bucket' => env('AWS_BUCKET'),
    'aws_url' => env('AWS_URL'),
    'aws_use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT'),
    'aws_root_folder' => env('AWS_ROOT_FOLDER', 'test'),

    'url' => 'https://baseplate.test/',
    'SiteName' => 'Baseplate',
    'PhoneNumber' => '1-111-111-1111',
    'EmailAddress' => 'info@baseplate.test',
    'SiteUrl' => 'baseplate.test',

    'midsCheckouUrl' => env('MIDS_CHECKOUT_URL'),

    'paypal_env' => 'sandbox',
    'authorize.mode' => env("AUTHNET_ENV", 'sandbox'), //sandbox or live

    'us.free.shipping.id'         => 5,
    'us.free.shipping.amount'     => 0,
    'us.exp.shipping.id'          => 36,
    'us.exp.shipping.amount'      => 7.95,
    'ca.standard.shipping.id'     => 33,
    'ca.standard.shipping.amount' => 9.95,

    //============================ORDER 1 PRODUCTS=============================

    ...$order1Products,

    'ip_white_list'  => [
        '::1',
        '127.0.0.1',
        '108.41.203.139',   # NY Office NEW
        '108.46.164.152',   # NY Office
        '173.63.72.225',    # NJ Office
        '206.201.0.83',     # PH Office - Converge
        '38.107.174.197',   # PH Office - APN
        '38.107.176.178',   # PH Office - 2
        '108.5.150.195',    # MG Home
        '112.199.65.90',    #8thFloor
        '96.242.19.128',    # MG Home
        '108.41.203.181',   # MB Home
        '24.185.140.132',   # JG Home
        '108.53.129.232',   # Mike MID's PC
        '216.107.140.19',   # Main
        '45.59.16.146',     # Backup
        '109.93.86.2',      # Luka Dynamic
        '96.242.19.128',    # Mike S' home IP
        '182.77.8.119',
        '172.98.167.233', #WFM
        '49.147.184.112',   # Kenn Dev
        '71.187.195.173',   # Mike G New Home
        '38.141.62.247', #1COGENT
        '202.182.71.92', #1ATT
        '109.121.0.219', #1SPRINT
        '109.121.0.219',
        '213.196.101.244', #NJ
        '10.225.1.119',
        '38.127.179.219',
        '116.50.180.178', #8th floor
        '172.85.99.139', #workforce
        '173.77.156.168',
        '112.202.113.143', #mayk c
        '108.54.81.12', #boss
        '255.255.255.0', #Benj
        '192.168.1.39', #Benj
        '192.168.1.1', #Benj
        '38.127.179.219' #luis
    ],
];
