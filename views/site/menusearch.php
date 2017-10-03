<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form ActiveForm */
?>

<?php $this->title = 'Menu Search'; ?>
<div class="site-menusearch">
   <div class="h3 text-center" style="color: white" >
    <?php $form = ActiveForm::begin(); ?>
       
        <?= $form->field($model, 'name')->dropDownList(
          ArrayHelper::map(Category::find()->all(),'name','name'),
   	 	     ['prompt' => 'Select a Category to view Menu']
			) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success ']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-menusearch -->
