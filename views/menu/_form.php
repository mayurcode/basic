<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>


	<?= $form->field($model, 'cat')->widget(Select2::classname(), [
    	'data' => ArrayHelper::map(Category::find()->all(),'id','name'),
   	 	'language' => 'en',
   		 'options' => ['placeholder' => 'Select a Category'],
   		 'pluginOptions' => [
        'allowClear' => true
   		 ],
			]); 

	?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
