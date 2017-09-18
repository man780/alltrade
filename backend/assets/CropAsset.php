<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/12/16
 * Time: 3:48 PM
 * To change this template use File | Settings | File Templates.
 */
namespace backend\assets;

use yii\web\AssetBundle;

class CropAsset extends AssetBundle
{
    /*public $basePath = '@backend/assets'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@backend/assets';//Алиас пути к файлам*/
    public $sourcePath = '@backend/assets';

    public $css = [
        'resource/cropimg.css',
    ];

    public $js = [
        'resource/cropimg.jquery.js',
        //'resource/cropimg.jquery.json',
        //'resource/cropimg.jquery.min.js',
        'resource/jquery.mousewheel.js',
    ];
}