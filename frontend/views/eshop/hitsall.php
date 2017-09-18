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
//vd($goods, false);
?>
<div id="container">
    <div class="clear"></div>
    <div style="margin-top: 10px;"></div>
    <h2 style="color: red; margin: 0; padding: 10px">Хиты продаж</h2>
    <div style="border-bottom: 1px solid red;"></div>
    <ul class="tovarpro-discount-container">
        <? foreach ($goods as $key => $good): ?>
            <?
            $imageArr = json_decode($good['image'], true);
            ?>
            <a href="<?=Url::toRoute(['/goods/view', 'id' => $good['id']]);?>" class="a">
                <li class="tovar">
                    <p class="tovar-p"><img class="qualityMarkimg" src="/images/goods/<?=$good['id']?>/<?=$imageArr['min']?>"></p>
                    <div style="padding-left: 10px; padding-right: 10px;">
                        <p style="font-size: 120%"><?=$good['name']?></p>
                        <p style="font-size: 120%">
                            <?=$good['cost']?>
                            <? if ($good['id_currency'] == 1) {
                                echo "сум";
                            }else {
                                echo "у.е.";
                            } ?>
                        </p>
                    </div>
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