<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
			    '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
				'defaultRoute' => '/site/index'
            ],
        ],
		'Sms' => [
            'class' => 'common\components\Sms',
        ],
		'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
			'enableSwiftMailerLogging' => true,
			'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.mygymspartner.in',
                'username' => 'noreply@mygympartner.in',
                'password' => '!2#4%6',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
    ],
];
