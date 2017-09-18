<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/15/16
 * Time: 6:38 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\themes\alltrade\assets;
use yii\web\AssetBundle;

/**
 * @author
 * @version 0.1
 */

class Eshop1Assets extends AssetBundle
{
    public $sourcePath = '@frontend/themes/alltrade/assets';
    public $baseUrl = '@web';

    public $css = [
        '/css/style.css',
        '/css/main.css',
        '/css/responsive.css',
        '/css/product.css',
        '/css/onlineshop.css',
        '/css/profile.css',
        'css/style.css',
        '/css/rating.css',
        '/css/jquery.rating.css',
        '/css/jquery.rating.css',
        '/css/jquery.rating.css',
    ];

    public $js = [
        'js/jquery.alphanumerick.js',
        'js/jquery.event.frame.js',
        'js/jquery.jparalax.min.js',
        'js/jquery.js',
        'js/jquery.jscrollpane.min.js',
        'js/jquery.maskedinput-1.3.min.js',
        'js/jquery.mousewheel.js',
        'js/myscript.js',
        'js/myscript2.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
        //'frontend\modules\maths\assets\MathsAssets',
//        'frontend\modules\mathematics\assets\MathematicsAssets',

    ];
}

