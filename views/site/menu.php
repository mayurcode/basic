<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Menu;



$this->title ='Menu';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-index">
  	<?= Html::a('<i class="fa fa-arrow-circle-left"></i> Go Back','javascript:history.back()', ['class'=>'btn btn-default','onclick' => "javascript:history.back()"]) ?>
 <h3 style="color:white" class="text-center"> Menu </h3>
     <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'layout' => '{items}{pager}',
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'name',
            'price'
            

            
        ],
    ]); ?>
    </div>
	</div>
	</div>

</div>
