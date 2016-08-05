<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 8/1/16 2:27 PM
 */

namespace backend\assets;

use root\modules\enpiiCms\libs\NpAssetBundle;

class LoginCustomAsset extends NpAssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/login-custom.css',
    ];
    public $javascript = [
        'js/login-custom.js',
    ];
}