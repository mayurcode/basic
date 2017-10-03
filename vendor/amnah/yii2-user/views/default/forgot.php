<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\models\forms\ForgotForm $model
 */

$this->title = Yii::t('user', 'Forgot password');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-default-forgot">
    <div class="login-box">
      <div class="login-logo">
        &nbsp;
    </div><!-- /.login-logo -->
            <div class="login-box-body login-header">
        <h1><img src="images/product.png" width="150px;" alt=""></h1>
    </div><!--/.login-header-->

    <?php if ($flash = Yii::$app->session->getFlash('Forgot-success')): ?>

        <div class="alert alert-success">
            <p><?= $flash ?></p>
        </div>

    <?php else: ?>
        
       <div class="login-box-body">
       
                <?php $form = ActiveForm::begin(['id' => 'forgot-form']); ?>
                    <?= $form->field($model, 'email',['options'=>[
          'tag'=>'div',
          'class'=>'form-group field-loginform-email has-feedback required'
          ],
          'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>
              {error}{hint}'
            ])->textInput(['placeholder'=>'Enter Email ID']) ?>
                    <div class="row">
                    <div class="col-xs-4">
                        <?= Html::submitButton(Yii::t('user', 'Submit'), ['class' => 'btn btn-primary btn-block btn-flat']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        </div>

    <?php endif; ?>

</div>
