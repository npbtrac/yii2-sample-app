<?php

return [
    'vendorPath' => VENDOR_PATH,
    'language' => 'en-US',
    'sourceLanguage' => 'en-US',
    'components' => [
        // URL Manager for backend
        'urlManagerBackend' => [
            'class'=> 'common\libs\ClsUrlManager',
            // we don't need pretty url here
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'baseUrl' => APP_BASE_URL."/admin",
            'languages' => ['en-US', 'vi-VN'],
            'enableDefaultLanguageUrlCode' => false,
            'enableLanguagePersistence' => false,
            'rules'=>[

            ]
        ],

        // URL Manager for frontend
        'urlManagerFrontend' => [
            'class'=> 'common\libs\ClsUrlManager',
            // enable pretty URL here
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'baseUrl' => APP_BASE_URL,
            'rules'=>[
                '/<locale:\w+>' => '',
            ]
        ],

        'view' => [
            // Use a custom view class
            'class'=> 'root\modules\enpiiCms\libs\NpView',
        ],

        'assetManager' => [
            // Use a custom asset manager class
            'class'=> 'root\modules\enpiiCms\libs\NpAssetManager',
        ],

        'i18n' => [
            'translations' => [
                '*' => [
                    // Set translation using .php file
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@root/modules/enpiiCms/languages',
                    'fileMap' => [
                        'enpii' => 'enpii.php',
                    ],
                ]
            ]
        ],

        'image' => [
            'class' => 'yii\image\ImageDriver',
            'driver' => 'GD',  //GD or Imagick
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'php:Y-m-d',
            'datetimeFormat' => 'php:Y-m-d H:i:s',
            'timeFormat' => 'php:H:i:s',
            'timeZone' => 'America/Toronto'
        ],



        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.sendgrid.net',
                'username' => 'hung.tran@enpii.com',
                'password' => 'eNpii@123',
                'port' => '587'
            ],
        ],

    ],

];
