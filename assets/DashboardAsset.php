<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
     public $css = [
        'assets/bootstrap/css/bootstrap.css',
        'assets/bootstrap/css/bootstrap.min.css',
        'assets/plugins/font-awesome/css/font-awesome.min.css',
        'assets/plugins/ionicons/css/ionicons.min.css',
        'assets/dist/css/AdminLTE.min.css',
         'assets/dist/css/skins/_all-skins.min.css',

        'css/footer_cust.css',
		
    ];
    
    public $js = [
           
            'assets/bootstrap/js/bootstrap.min.js',
    
            'assets/dist/js/app.min.js',

    ]; 
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
		//'yii\bootstrap\BootstrapPluginAsset',
    ];
}
