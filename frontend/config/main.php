<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$arrConfigCommon = require (APP_BASE_PATH.'/common/config/main.php');
$arrConfigCommonLocal = require (APP_BASE_PATH.'/common/config/main-local.php');

$arrConfigLocal = require(__DIR__.'/main-local.php');

$arrConfig = [
    'id' => 'app-frontend',

    // Assign base path of the frontend folder
    'basePath' => dirname(__DIR__),

    // Load components: log as bootstrap components
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'vi-VN',
    'sourceLanguage' => 'en-US',
    'components' => [
        // Assign Frontend Url Manager to default Url Manager because this is Frontend
        'urlManager' => $arrConfigCommon['components']['urlManagerFrontend'],

        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/languages',
                    'fileMap' => [
                        'app' => 'language.php',
                    ],
                ]
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'authTimeout' => 300,
            'identityCookie' => [
                'name' => 'frontendUser', // unique for frontend
            ]
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 10 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                ],
            ],
        ],

        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => '6LddpCQTAAAAADkMcb59wigYVIq7n1Y9jKE4HCS3',
            'secret' => '6LddpCQTAAAAAPU27Z1X3nwsVnNed-9aDrk5moSA',
        ],
    ],
    'params' => $params,
];

return yii\helpers\ArrayHelper::merge(
    $arrConfigCommon,
    $arrConfigCommonLocal,
    $arrConfig,
    $arrConfigLocal
);


