<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use amnah\yii2\user\models\Profile;

use yii\widgets\Breadcrumbs;
use app\assets\DashboardAsset;

DashboardAsset::register($this);
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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

	<?php	  /* This is Command for Account Setting


                         SETTING  FOR USERNAME, PHOTO , ID ,SESSION

		*/ 		?>
			   <?php $isAdm = Yii::$app->user->identity->id; ?>
                      <?php $sql = Profile::find()->select(['full_name'])->andWhere(['user_id'=> $isAdm ])->one() ;?>

<!-- /close of Settings -->					  
					  
<div class="wrap">
<div class="wrapper">
 <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ADMIN</b>PANEL</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
         
              <!-- User Account: style can be found in dropdown.less -->
	
			  
              <ul class="dropdown user user-menu pull-right">
               
                  
                    <div class="pull-right">
				       <?= Html::a(
					    'Sign out',
						['/user/logout'],
						['data-method' => 'post', 'class'=>'btn btn-default btn-flat'])
						?>
                      
                    </div>
                  
                </ul>
              
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
	  
	  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
         </br>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>HOME</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>CATEGORIES</span>
                <span class="label label-primary pull-right">2</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=Yii::$app->homeUrl ?>/category/"><i class="fa fa-angle-double-right"></i>Manage Category</a></li>
                <li><a href="<?=Yii::$app->homeUrl ?>/category/create"><i class="fa fa-angle-double-right"></i>Create New Category</a></li>
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-home"></i>
                <span>Our Menu</span>
                <span class="label label-primary pull-right">2</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=Yii::$app->homeUrl ?>/menu/create"><i class="fa fa-angle-double-right"></i>Create Menu</a></li>
                <li><a href="<?=Yii::$app->homeUrl ?>/menu"><i class="fa fa-angle-double-right"></i>Manage Menu</a></li>
            
              </ul>
            </li>
			
			
			<?php $role = Yii::$app->user->identity->role_id; 
			    if($role == 1 ) {
			?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-lock"></i> <span>User Managament</span>
                <span class="label label-primary pull-right">3</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=Yii::$app->homeUrl ?>/user/admin/create"><i class="fa fa-angle-double-right"></i>Create User</a></li>
                <li><a href="<?=Yii::$app->homeUrl ?>/user/admin/"><i class="fa fa-angle-double-right"></i>Manage user</a></li>
                <li><a href="<?=Yii::$app->homeUrl ?>/user/account"><i class="fa fa-angle-double-right"></i>Change Password</a></li>
              </ul>
            </li>
				<?php } 
				
				else
				{
					 
				}
				?>
			
        </section>
        <!-- /.sidebar -->
      </aside>


   <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         
		  
          <ol class="breadcrumb">
            <li><?= Html::a('<i class="fa fa-home"></i>Home', Yii::$app->homeUrl ,['class'=>'btn btn-default']) ?></li>
			<?= Html::a('<i class="fa fa-arrow-circle-left"></i> Go Back','javascript:history.back()', ['class'=>'btn btn-default','onclick' => "javascript:history.back()"]) ?>
       </ol>
	   
        </section>

        <!-- Main content -->
        <section class="content">
        <?= $content ?>
		</section>
    </div>
</div>

 
	 
	  <footer class="edusec-main-footer">
      <div class="container col-lg-12 col-md-12 col-xs-12 no-padding">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 1.0 -->
        </div>
        <strong class="text-center">Copyright &copy; <?= date('Y') ?> <a href="#">Mayur Bhandare</a></strong>
      </div>
    </footer>
    </div><!-- ./wrapper -->  

<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>
