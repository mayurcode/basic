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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        
        '//fonts.googleapis.com/css?family=Lora|Varela+Round',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css',
         'css/AdminLTE.min.css',
        'css/custom_style.css',
    ];
    public $js = [
                '//getbootstrap.com/assets/js/vendor/popper.min.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',

    ];
}
