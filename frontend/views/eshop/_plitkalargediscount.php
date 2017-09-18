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
<? if ($model->discount): ?>
	<a href="<?=Url::toRoute(['/goods/view', 'id' => $model->id]);?>" class="a">
		<li><!-- <li class="tovarpro-largediscount"> -->
		    <div class="tovarpro-discount-p">
		    	<img class="qualityMarkimg" src="<?=$image;?>" style="vertical-align: middle;">
		    </div>
		    <p class="tovarpro-discount-p-p"><?=$model->name;?></p>
		    <p class="tovarpro-discount-cost">
		    	<?=$model->cost?>
		    	<?
		            if ($model->id_currency == 1) {
		                echo "сум";
		            }
		            else {
		                echo "у.е.";
		            }
		        ?>
		    </p>
		    <!-- <p class="tovarpro-discount-cost">
		    	<del>
		    		<?=$model->old_cost?>
		    		<?
			            if ($model->id_currency == 1) {
			                echo "сум";
			            }
			            else {
			                echo "у.е.";
			            }
			        ?>
		    	</del>
		    </p> -->
		    <div class="discount"><p class="discountp">-<?=$model->discount;?>%</p></div>
		</li>
	</a>
<? else: ?>
<? endif ?>