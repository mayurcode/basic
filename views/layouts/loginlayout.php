<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use app\assets\LoginAsset;

LoginAsset::register($this);
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
	<style>
.icheckbox_square-blue,
.iradio_square-blue {
    display: inline-block;
    *display: inline;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    width: 22px;
    height: 22px;
    background: url(<?php echo Yii::$app->request->baseUrl.'/images/blue.png'; ?>) no-repeat;
    border: none;
    cursor: pointer;
}
.icheckbox_square-blue {
    background-position: 0 0;
}
    .icheckbox_square-blue.hover {
        background-position: -24px 0;
    }
    .icheckbox_square-blue.checked {
        background-position: -48px 0;
    }
    .icheckbox_square-blue.disabled {
        background-position: -72px 0;
        cursor: default;
    }
    .icheckbox_square-blue.checked.disabled {
        background-position: -96px 0;
    }
.iradio_square-blue {
    background-position: -120px 0;
}
    .iradio_square-blue.hover {
        background-position: -144px 0;
    }
    .iradio_square-blue.checked {
        background-position: -168px 0;
    }
    .iradio_square-blue.disabled {
        background-position: -192px 0;
        cursor: default;
    }
    .iradio_square-blue.checked.disabled {
        background-position: -216px 0;
    }
/* Retina support */
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
       only screen and (-moz-min-device-pixel-ratio: 1.5),
       only screen and (-o-min-device-pixel-ratio: 3/2),
       only screen and (min-device-pixel-ratio: 1.5) {
    .icheckbox_square-blue,
    .iradio_square-blue {
        background-image: url(<?php echo Yii::$app->request->baseUrl.'/images/blue@2x.png'; ?>);
        -webkit-background-size: 240px 24px;
        background-size: 240px 24px;
    }
}
</style>
</head>
<body class="login-page">
<?php $this->beginBody() ?>
<div class="wrap">
<div class="container">
<?= $content ?>
</div>
</div>

<footer class="login-footer">
<div class="container">
<p class="pull-left">&copy; 2017</p>
<p class="pull-right">Powered By Mayur Bhandare</p>
</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>