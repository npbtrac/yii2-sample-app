<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 7/1/16 10:12 PM
 */

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use backend\assets\FontsAsset;
use backend\assets\BootstrapPluginAsset;
use yii\helpers\Html;
use common\widgets\Alert;

$arrJsPosEnd = empty($this->js[\yii\web\View::POS_END]) ? [] : $this->js[\yii\web\View::POS_END];
array_unshift($arrJsPosEnd , "var baseUrl = \"".Yii::$app->urlManager->baseUrl."\";");
$this->js[\yii\web\View::POS_END] = $arrJsPosEnd;

LoginAsset::register($this);
FontsAsset::register($this);
BootstrapPluginAsset::register($this);

$this->beginPage() ?><!DOCTYPE html>
<!--[if IE 8]>
<html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class=" login">
<?php $this->beginBody() ?>

<!-- BEGIN LOGO -->
<div class="logo">

    <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/logo-admin.png'?>" alt="<?= Yii::t('app', 'Admin Panel') ?>" width="320"/>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->

<div class="wrap">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<!-- END LOGIN -->

<!--[if lt IE 9]>

<![endif]-->
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>