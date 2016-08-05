<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets-enpii/global/plugins/select2/css/select2.min.css',
        'assets-enpii/global/plugins/colorbox-master/example1/colorbox.css',
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic',
        'themes/default/css/bootstrap_base.css',
        'themes/default/css/fonts.css',
        'themes/default/libs/jquery-ui/jquery-ui.min.css',
        'themes/default/libs/timepicker/jquery.timepicker.css',
        'themes/default/css/bootstrap.min.css',
        'themes/default/css/video-js.min.css',
        'themes/default/css/page_mission.css',
        'themes/default/css/mission_new.css',
        'themes/default/css/page_boy_girl_canada.css',
        'themes/default/css/write_now.css',
        'themes/default/css/main.css',
    ];

    public $js = [
        'assets-enpii/global/plugins/modern-izr/modernizr.js',
        'assets-enpii/global/plugins/detectizr/dist/detectizr.min.js',
        'assets-enpii/global/plugins/select2/js/select2.min.js',
        'assets-enpii/global/plugins/colorbox-master/jquery.colorbox-min.js',
        'assets-enpii/global/plugins/jQueryRotate.js',
        'themes/default/libs/jquery-ui/jquery-ui.min.js',
        'themes/default/libs/timepicker/jquery.timepicker.min.js',
        'themes/default/js/TweenMax.min.js',
        'themes/default/js/validationEngine.js',
        'themes/default/js/plupload.full.min.js',
        'themes/default/js/video.js',
        'themes/default/js/page-mission.js',
        'themes/default/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
