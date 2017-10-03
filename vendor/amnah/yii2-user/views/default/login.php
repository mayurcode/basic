<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\models\forms\LoginForm $model
 */

$this->title = Yii::t('user', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="login-box">
      <div class="login-logo">
        &nbsp;
    </div><!-- /.login-logo -->
            <div class="login-box-body login-header">
        <h1><img src="<?=Yii::getAlias('@web')?>/images/logo.png" width="150px;" alt=""></h1>
    </div><!--/.login-header-->
     
      <div class="login-box-body">
        <p class="login-box-msg">Please fill out the following fields to Login</p>


    <?php $form = ActiveForm::begin([
        'id' => 'login-form' ]); ?>

    <?= $form->field($model, 'email',['options'=>[
          'tag'=>'div',
          'class'=>'form-group field-loginform-username has-feedback required'
          ],
          'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>
              {error}{hint}'
            ])->textInput(['placeholder'=>'Username']) ?>
            
            
    <?= $form->field($model, 'password',['options'=>[
          'tag'=>'div',
          'class'=>'form-group field-loginform-password has-feedback required'
          ],
          'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>
              {error}{hint}'
            ])->passwordInput(['placeholder'=>'Password']) ?>
            
    <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
    <?= $form->field($model, 'rememberMe')->checkbox() ?>
</div>
         </div><!--./col-xs-8 -->
    <div class="col-xs-4">
            <?= Html::submitButton(Yii::t('user', 'Login'), ['class' => 'btn btn-primary btn-block btn-flat']) ?>
</div>
</div>
           
            
            <?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/forgot"]) ?> 
            
        </div>
    

 
    <?php ActiveForm::end(); ?>
   </div>
   </div>
   
    <?php if (Yii::$app->get("authClientCollection", false)): ?>
        <div class="col-lg-offset-2 col-lg-10">
            <?= yii\authclient\widgets\AuthChoice::widget([
                'baseAuthUrl' => ['/user/auth/login']
            ]) ?>
        </div>
    <?php endif; ?>

    <div class="col-lg-offset-2" style="color:#999;">
        You may login with <strong>neo/neo</strong>.<br>
        To modify the username/password, log in first and then <?= HTML::a("update your account", ["/user/account"]) ?>.
    </div>

<script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
