<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title="Matty Kabab") ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="header-wrapper">
   <!-- This is navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#c0392b;">
  <!-- Just an image -->
  <a class="navbar-brand" href="#">
    <img src="<?= Yii::getAlias('@web')?>/images/logo.png" width="250px" height="50px" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= Yii::$app->homeUrl ?>">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= Yii::$app->homeUrl?>/site/menu">OUR MENU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">OFFERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= Yii::$app->homeUrl?>/site/about">LOCATE US</a>
      </li>
    </ul>
    <h3 class="box-header with-border" style="color:grey">Call : +91-9X-XX-XX-XX-XX</h3>
    <ul class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCOUNT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= Yii::$app->homeUrl?>/user/login">Admin Login</a>
          <a class="dropdown-item" href="#">TO-DO</a>
        
        </div>

      <!--
      <a class="iconSocial" href="https://www.facebook.com/__USERPAGE__" target="_blank"><i class="fa fa-facebook-square fa-4x" aria-hidden="true"></i></a>
      <a class="iconSocial" href="http://instagram.com/__USERID__" target="_blank"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i> -->
    </ul>

  </div>
</nav>
<hr>

 <section class="content">
        <?= $content ?>
        </section>
 <hr>
 <footer class="ms-footer pull-bottom foot" >
    <div class="text-center" style="color:yellow">
    <strong>Copyright &copy; 2017-18 <a href="#">Mayur Bhandare</a></strong>
</div>
  </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
