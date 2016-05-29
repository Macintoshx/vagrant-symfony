<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname={{ mysql_db }}',
            'username' => '{{ mysql_user }}',
            'password' => '{{ mysql_pass }}',
            'charset' => 'utf8',
        ],
        'request' => [
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
            'cookieValidationKey' => 'I-love-Yii2',
        ],
    ],
];
