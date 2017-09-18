<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/16/16
 * Time: 10:26 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
//vd($layoutPath, false);
?>
<?=$this->render('/layouts/_eshopmenu', ['layoutPath'=>$layoutPath, 'id'=>$id]);?>

<div id="container">
    <div class="clear"></div>
    <div style="margin-top: 10px;"></div>
    <h2 style="color: red; margin: 0; padding: 10px; float: left">ЛИДЕРЫ ПРОДАЖ</h2>
    <p>    
        <span style="float: right; margin-top: 15px; margin-right: 5px; margin-bottom: 5px;"><a href="<?=Url::toRoute(['/eshop/leader', 'id' => $id]);?>" style=""><img src="<?=$layoutPath?>/images/category/list1.png"></a></span>
        <span style="float: right; margin-right: 15px; margin-top: 15px; margin-bottom: 5px;"><a href="<?=Url::toRoute(['/eshop/leaderlist', 'id' => $id]);?>"><img src="<?=$layoutPath?>/images/category/list2.png"></a></span>
        <span style="float: right; margin-top: 14px; margin-right: 10px; font-weight: bold;">Вид:</span>
    </p>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid red;"></div>
    <ul class="tovarpro-discount-container">
        <? foreach ($goods as $key => $good):
            $imageArr = json_decode($good->image, true);
            if(is_array($imageArr)){
                $image = '/images/goods/'.$good->id.'/'.$imageArr['min'];
            }else{
                $image = '/images/placeHolder.png';
            }
        ?>
            <a href="<?=Url::toRoute(['/goods/view', 'id' => $good->id]);?>" class="a">
                <li class="tovarpro-discount">
                    <div class="tovarpro-discount-p"><img src="<?=$image;?>"></div>
                    <div style="padding-left: 10px; padding-right: 10px;">
                        <p class="tovarpro-discount-p-p"><?=$good->name?></p>
                        <p class="tovarpro-discount-cost"><?=$good->cost?> сум</p>
                        <div class="tovarpro-discount-order">Заказать</div>
                    </div>
                </li>
            </a>
        <? endforeach; ?>
    </ul>
    <div class="clear"></div>
</div>