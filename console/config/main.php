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
    'id' => 'app-console',
    'name' => 'Console',
    // Assign base path of the frontend folder
    'basePath' => dirname(__DIR__),

    // Load components: log as bootstrap components
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 10 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],

    ],
    'params' => $params,
];

$arrConfigFinal = yii\helpers\ArrayHelper::merge(
    $arrConfigCommon,
    $arrConfigCommonLocal,
    $arrConfig,
    $arrConfigLocal
);

$arrConfigFinal['bootstrap'][] = 'enpiiCms';
$arrConfigFinal['modules']['enpiiCms'] = [
    'class' => 'root\modules\enpiiCms\Module',
];

return $arrConfigFinal;



