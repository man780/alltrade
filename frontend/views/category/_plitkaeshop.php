<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 5/27/16
 * Time: 6:37 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
$imageArr = json_decode($model->image, true);
//vd($imageArr, false);
if(is_array($imageArr)){
    $image = '/images/goods/'.$model->id.'/'.$imageArr['min'];
}else{
    $image = '/images/placeHolder.png';
}
//vd($model, false);
?>



<a href="<?=Url::toRoute(['/goods/view', 'id' => $model->id]);?>" class="a">
<li class="category">
    <p class="category-plitka-p">
    	<img class="qualityMarkimg" src="<?=$image;?>" style="vertical-align: middle;">
    </p>
    <div style="padding-left: 10px; padding-right: 10px;">
        <p style="text-align: center; font-size: 120%; font-weight: bold;"><?=$model->name;?></p>
        <p style="text-align: center; font-size: 120%;">
        	<?=$model->cost?>
        	<? if ($model->id_currency == 1) {
				echo "сум";
			}else {
				echo "у.е.";
			} ?>
        </p>
    </div>
</li>
</a>
