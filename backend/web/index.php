<?php
/**
 * Created by PhpStorm.
 * User: npbtrac@yahoo.com
 * Date: 23/7/16
 * Time: 10:48 AM
 */

// Load environment params
require(__DIR__ . '/../../environment.php');

// Load Yii2 Framework
require(VENDOR_PATH . '/autoload.php');
require(VENDOR_PATH . '/yiisoft/yii2/Yii.php');

// Load bootstrap settings
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

// Load configurations
$config = require(APP_BASE_PATH.'/backend/config/main.php');

// Create Applications
$application = new \root\modules\enpiiCms\libs\NpWebApplication($config);

// Run web application
$application->run();