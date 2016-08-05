<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\assets\BootstrapPluginAsset;

BootstrapPluginAsset::register($this);
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?= Yii::$app->urlManager->baseUrl ?>/favicon.ico" type="image/x-icon" />

</head>

<body class="locale-<?= Yii::$app->language ?> controller-<?= Yii::$app->controller->id ?> action-<?= Yii::$app->controller->action->id ?>">
<?php $this->beginBody() ?>
<div id="main-container" class="site-wrapper">
    <div class="site-inner">

        <?= $content ?>


    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
