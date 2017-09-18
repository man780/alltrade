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
//vd($category, false);

?>
<div id="container">
    <div class="clear"></div>
    <div style="margin-top: 10px;"></div>
    <h2 style="color: red; margin: 0; padding: 10px">Товары с большими скидками</h2>
    <div style="border-bottom: 1px solid red;"></div>
    <div style="background: #ddd; text-align: center; padding: 10px 0;">
        <div class="qualityMarkdiv">
            <? if ($id_goods == null): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount']);?>" class="a back largeactive">Все</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount']);?>" class="a back">Все</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 562): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 562]);?>" class="a back largeactive">Женская одежда</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 562]);?>" class="a back">Женская одежда</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 563): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 563]);?>" class="a back largeactive">Мужская одежда</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 563]);?>" class="a back">Мужская одежда</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 600): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 600]);?>" class="a back largeactive">Компьютеры</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 600]);?>" class="a back">Компьютеры</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 599): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 599]);?>" class="a back largeactive">Телефоны</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 599]);?>" class="a back">Телефоны</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 149): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 149]);?>" class="a back largeactive">Для дома</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 149]);?>" class="a back">Для дома</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 565): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 565]);?>" class="a back largeactive">Спортивная одежда</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 565]);?>" class="a back">Спортивная одежда</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 601): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 601]);?>" class="a back largeactive">Тв / видеотехника</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 601]);?>" class="a back">Тв / видеотехника</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 564): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 564]);?>" class="a back largeactive">Обувь</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 564]);?>" class="a back">Обувь</a>
            <? endif; ?>
        </div>
        <div class="qualityMarkdiv">
            <? if ($id_goods == 150): ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 150]);?>" class="a back largeactive">Детям и мамам</a>
            <? else: ?>
                <a href="<?=Url::toRoute(['/eshop/largediscount', 'id' => 150]);?>" class="a back">Детям и мамам</a>
            <? endif; ?>
        </div>
        <div class="clear"></div>
    </div>
    <ul class="tovarpro-discount-container">
        <? foreach ($goods as $key => $good): ?>
            <a href="<?=Url::toRoute(['/goods/view', 'id' => $good->id]);?>" class="a">
                <li class="tovarpro-largediscount">
                    <div class="tovarpro-discount-p">
                        <?
                            $image = json_decode($good->image, true);
                            //vd($image, false);
                        ?>
                        <img src="/images/goods/<?=$good->id?>/<?=$image['min'];?>">
                    </div>
                    <div>
                        <p class="tovarpro-discount-p-p"><?=$good->name;?></p>
                        <p class="tovarpro-discount-cost">
                            <?=$good->cost;?>
                            <?
                                if ($good->id_currency == 1) {
                                    echo "сум";
                                }
                                else {
                                    echo "у.е.";
                                }
                            ?>
                        </p>
                    </div>
                    <div class="discount"><p class="discountp">-<?=$good->discount;?>%</p></div>
                </li>
            </a>
        <? endforeach ?>
    </ul>
    <div class="clear"></div>
    <div style="background: #ddd; padding: 10px 0;">
        <?= LinkPager::widget(['pagination' => $pagination]); ?>
    </div>
    <div class="clear"></div>
</div>