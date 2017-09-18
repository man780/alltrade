<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 5/27/16
 * Time: 6:37 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
$imageArr = json_decode($model->image);
if(is_array($imageArr)){
    $image = '/images/ads/'.$model->id.'/'.$imageArr[0];
}else{
    $image = '/images/placeHolder.png';
}
?>

<a href="<?=Url::toRoute(['ads/view', 'id' => $model->id]);?>" class="a">
<li class="category">
    <p style="text-align: center;"><img class="qualityMarkimg" src="<?=$image;?>"></p>
    <div style="padding-left: 10px; padding-right: 10px;">
        <p style="text-align: center; font-size: 120%; font-weight: bold;"><?=$model->name;?></p>
        <p style="text-align: center; font-size: 120%;"><?=$model->cost?></p>
    </div>
</li>
</a>
