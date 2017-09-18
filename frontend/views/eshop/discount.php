<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/16/16
 * Time: 10:26 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
use yii\widgets\LinkPager;
//vd($filterCost, false);
if ($filterCost == 'top') {
    $filterCostValue = null;
}
elseif ($filterCost == 'bottom') {
    $filterCostValue = 'top';
}
else {
    $filterCostValue = 'bottom';
}

if ($filterOrder == 'top') {
    $filterOrderValue = null;
}
elseif ($filterOrder == 'bottom') {
    $filterOrderValue = 'top';
}
else {
    $filterOrderValue = 'bottom';
}

?>
<?=$this->render('/layouts/_eshopmenu', ['layoutPath'=>$layoutPath, 'id'=>$id]);?>

<div id="container">
    <div class="clear"></div>
    <div style="margin-top: 10px;"></div>
    <h2 style="color: red; margin: 0; padding: 10px; float: left;">ТОВАРЫ СО СКИДКАМИ</h2>
    <p style="margin: 15px 0; float: right;">
        <span style="margin-right: 15px; font-weight: bold; display: block; float: left;">Вид:</span>
        <span style="margin-right: 15px;"><a href="<?=Url::toRoute(['/eshop/discountlist', 'id' => $id]);?>"><img src="<?=$layoutPath?>/images/category/list2.png"></a></span>
        <span style="margin-right: 15px;"><a href="<?=Url::toRoute(['/eshop/discount', 'id' => $id]);?>" style=""><img src="<?=$layoutPath?>/images/category/list1.png"></a></span>
    </p>
    <p style="margin: 15px 0; float: right;">
        <a href="<?=Url::toRoute(['/eshop/discount', 'id' => $id, 'filterOrder' => $filterOrderValue]);?>" class="a" style="margin-right: 15px; font-weight: bold;"><span class="cat-cost-filter <? if ($filterOrder == 'top') { echo "filter-top"; } elseif ($filterOrder == 'bottom') { echo "filter-bottom"; } else { echo "filter-none"; } ?>">Число заказов</span></a>
        <a href="<?=Url::toRoute(['/eshop/discount', 'id' => $id, 'filterCost' => $filterCostValue]);?>" class="a" style="margin-right: 15px; font-weight: bold;"><span class="cat-cost-filter <? if ($filterCost == 'top') { echo "filter-top"; } elseif ($filterCost == 'bottom') { echo "filter-bottom"; } else { echo "filter-none"; } ?>">Цена</span></a>
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
                    <div>
                        <p class="tovarpro-discount-p-p"><?=$good->name?></p>
                        <p class="tovarpro-discount-cost"><?=$good->cost?> сум</p>
                        <div class="tovarpro-discount-order">Заказать</div>
                    </div>
                    <div class="discount"><p class="discountp">-<?=$good->discount?>%</p></div>
                </li>
            </a>
        <? endforeach; ?>
    </ul>
    <div class="clear"></div>
    <div style="background: #ddd; padding: 10px 0;">
        <?= LinkPager::widget(['pagination' => $pagination]); ?>
    </div>
    <div class="clear"></div>
</div>