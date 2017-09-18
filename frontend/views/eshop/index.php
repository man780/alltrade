<?
use frontend\widgets\category\Category1Widget;
use yii\helpers\Url;
?>
<div id="header">

<div class="clear"></div>

<div id="topcenter">


<div class="clear"></div>

<div style="margin-top: 10px; border-bottom: 1px solid #ddd;"></div>

<div class="topheaderlink">
    <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; width: 220px;">
                <p style="font-size: 13px;">Категории</p>
            </td>
            <td colspan="5" style="border-bottom: 1px solid #ddd; padding-left: 10px;">
                <p>
                    <a href="#" class="a">Горящие товары</a>
                    <a href="#" class="a apadding">iTao</a>
                    <a href="#" class="a apadding">Бренд-фокус</a>
                    <a href="#" class="a apadding">Hi-TechКоллекции</a>
                    <a href="#" class="a apadding">Мода</a>
                    <a href="#" class="a apadding">Бестселлеры</a>
                </p>
            </td>
        </tr>
    </table>
</div>

<div style="max-width: 240px; float: left; position: relative;">
<div class="leftmenuindex">
    <?=Category1Widget::widget(['id_menu' => 2]);?>
</div>
</div>

<?=$this->render('/layouts/_slide', ['layoutPath'=>$layoutPath]);?>

<?=$this->render('/layouts/_banner', ['layoutPath'=>$layoutPath]);?>

<div class="clear"></div>

    <div class="bannerbottom">
        <div style="width:50%; float:left; text-align: center;">
            <img src="<?=$layoutPath?>/images/banner/1.1.jpg" class="bannerrightimg2">
        </div>
        <div style="width:50%; float:left; text-align: center;">
            <img src="<?=$layoutPath?>/images/banner/2.1.jpg" class="bannerrightimg3">
        </div>
    </div>
</div>
<div class="clear"></div>

<div id="topbottom">
    <div class="topbottomdiv">
        <a href="#" class="a">
            <table cellspacing="0" cellpadding="0" style="margin: 0 auto">
                <tr>
                    <td>
                        <img src="<?=$layoutPath?>/images/header/1.png">
                    </td>
                    <td>
                        <p class="topbottomp">Как сделать заказ</p>
                    </td>
                </tr>
            </table>
        </a>
    </div>
    <div class="topbottomdiv">
        <a href="#" class="a">
            <table cellspacing="0" cellpadding="0" style="margin: 0 auto">
                <tr>
                    <td>
                        <img src="<?=$layoutPath?>/images/header/2.png">
                    </td>
                    <td>
                        <p class="topbottomp">Как оплатить товар</p>
                    </td>
                </tr>
            </table>
        </a>
    </div>
    <div class="topbottomdiv">
        <a href="#" class="a">
            <table cellspacing="0" cellpadding="0" style="margin: 0 auto">
                <tr>
                    <td>
                        <img src="<?=$layoutPath?>/images/header/3.png">
                    </td>
                    <td>
                        <p class="topbottomp">Доставка</p>
                    </td>
                </tr>
            </table>
        </a>
    </div>
    <div class="topbottomdiv">
        <a href="#" class="a">
            <table cellspacing="0" cellpadding="0" style="margin: 0 auto">
                <tr>
                    <td>
                        <img src="<?=$layoutPath?>/images/header/4.png">
                    </td>
                    <td>
                        <p class="topbottomp">Гарантии</p>
                    </td>
                </tr>
            </table>
        </a>
    </div>
    <div class="clear"></div>
    <div style="margin-bottom: 15px;"></div>
</div>
</div>



<div id="content">


<?
    //vd($discountGoods, false);
    if(count($discountGoods) > 0):;
?>
    <div class="clear"></div>
    <div id="discountedProducts">
        <div style="background: #eee; padding-bottom: 10px;">
            <p class="brandsp"><a href="<?=Url::toRoute(['/eshop/largediscount']);?>" style="color: red; text-decoration: none; margin-left: 10px;">Товары с большими скидками</a></p>
            <p style="float: right; padding-top: 15px; padding-right: 10px;"><a href="<?=Url::toRoute(['/eshop/largediscount']);?>" class="a">Смотреть все</a></p>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div style="border-bottom: 1px solid red; margin-bottom: 15px;"></div>
        
        <div class="discountedProductsdiv1">
            <div class="left-dis-cont">
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[0]['id']]);?>" class="a">
                    <div class="left-dis-cont-1">
                        <p class="left-dis-cont-1-p">
                            <? 
                                $goodsimg = json_decode($discountGoods[0]['image'], true);
                            ?>
                            <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[0]['id']?>/<?=$goodsimg['min']?>">
                        </p>
                        <p><?=$discountGoods[0]['name'];?></p>
                        <p style="margin-top: 15px">
                            <span style="color: #e62e04">
                                <?=$discountGoods[0]['cost']?>
                                <?
                                    if ($discountGoods[0]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                            </span>
                        </p>
                        <p style="text-decoration: line-through; font-size: 80%;">
                            <?=$discountGoods[0]['old_cost']?>
                                <?
                                    if ($discountGoods[0]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                        </p>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[0]['max(`discount`)'];?>%</p></div>
                    </div>
                </a>
                <? if(count($discountGoods) > 1):; ?>
                <div style="border-bottom: 1px solid #ddd;"></div>
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[1]['id']]);?>" class="a">
                    <div class="left-dis-cont-2">
                        <p class="left-dis-cont-1-p">
                            <? 
                                $goodsimg = json_decode($discountGoods[1]['image'], true);
                            ?>
                            <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[1]['id']?>/<?=$goodsimg['min']?>">
                        </p>
                        <p><?=$discountGoods[1]['name'];?></p>
                        <p style="margin-top: 15px">
                            <span style="color: #e62e04">
                                <?=$discountGoods[1]['cost']?>
                                <?
                                    if ($discountGoods[1]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                            </span>
                        </p>
                        <p style="text-decoration: line-through; font-size: 80%;">
                            <?=$discountGoods[1]['old_cost']?>
                                <?
                                    if ($discountGoods[1]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                        </p>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[1]['max(`discount`)'];?>%</p></div>
                    </div>
                </a>
                <? endif; ?>
            </div>
            <? if(count($discountGoods) > 2):; ?>
            <div class="right-dis-cont">
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[2]['id']]);?>" class="a">
                    <div class="right-dis-cont-1">
                        <div class="right-dis-cont-1-1">
                            <p><?=$discountGoods[2]['name'];?></p>
                        <p style="margin-top: 15px">
                            <span style="color: #e62e04">
                                <?=$discountGoods[2]['cost']?>
                                <?
                                    if ($discountGoods[2]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                            </span>
                        </p>
                        <p style="text-decoration: line-through; font-size: 80%;">
                            <?=$discountGoods[2]['old_cost']?>
                                <?
                                    if ($discountGoods[2]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                        </p>
                        </div>
                        <div class="right-dis-cont-1-2">
                            <p class="right-dis-cont-1-2-p">
                                <? 
                                    $goodsimg = json_decode($discountGoods[2]['image'], true);
                                ?>
                                <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[2]['id']?>/<?=$goodsimg['min']?>">
                            </p>
                        </div>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[2]['max(`discount`)'];?>%</p></div>
                        <div class="clear"></div>
                    </div>
                </a>
                <? if(count($discountGoods) > 3):; ?>
                <div style="border-bottom: 1px solid #ddd;"></div>
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[3]['id']]);?>" class="a">
                    <div class="right-dis-cont-1">
                        <div class="right-dis-cont-1-1">
                            <p><?=$discountGoods[3]['name'];?></p>
                        <p style="margin-top: 15px">
                            <span style="color: #e62e04">
                                <?=$discountGoods[3]['cost']?>
                                <?
                                    if ($discountGoods[3]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                            </span>
                        </p>
                        <p style="text-decoration: line-through; font-size: 80%;">
                            <?=$discountGoods[3]['old_cost']?>
                                <?
                                    if ($discountGoods[3]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                        </p>
                        </div>
                        <div class="right-dis-cont-1-2">
                            <p class="right-dis-cont-1-2-p">
                                <? 
                                    $goodsimg = json_decode($discountGoods[3]['image'], true);
                                ?>
                                <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[3]['id']?>/<?=$goodsimg['min']?>">
                            </p>
                        </div>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[3]['max(`discount`)'];?>%</p></div>
                        <div class="clear"></div>
                    </div>
                </a>
                <? endif; ?>
                <? if(count($discountGoods) > 4):; ?>
                <div style="border-bottom: 1px solid #ddd;"></div>
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[4]['id']]);?>" class="a">
                    <div class="right-dis-cont-1">
                        <div class="right-dis-cont-1-1">
                            <p><?=$discountGoods[4]['name'];?></p>
                            <p style="margin-top: 15px">
                                <span style="color: #e62e04">
                                    <?=$discountGoods[4]['cost']?>
                                    <?
                                        if ($discountGoods[4]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                                </span>
                            </p>
                            <p style="text-decoration: line-through; font-size: 80%;">
                                <?=$discountGoods[4]['old_cost']?>
                                    <?
                                        if ($discountGoods[4]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                            </p>
                        </div>
                        <div class="right-dis-cont-1-2">
                            <p class="right-dis-cont-1-2-p">
                                <? 
                                    $goodsimg = json_decode($discountGoods[4]['image'], true);
                                ?>
                                <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[4]['id']?>/<?=$goodsimg['min']?>">
                            </p>
                        </div>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[4]['max(`discount`)'];?>%</p></div>
                        <div class="clear"></div>
                    </div>
                </a>
                <? endif; ?>
            </div>
            <? endif; ?>
        </div>
        <? if(count($discountGoods) > 5):; ?>
        <div class="discountedProductsdiv2">
            <div class="left-dis-cont">
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[5]['id']]);?>" class="a">
                    <div class="left-dis-cont-1">
                        <p class="left-dis-cont-1-p">
                            <? 
                                $goodsimg = json_decode($discountGoods[5]['image'], true);
                                //vd($goodsimg, false);
                            ?>
                            <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[5]['id']?>/<?=$goodsimg['min']?>">
                        </p>
                        <p><?=$discountGoods[0]['name'];?></p>
                        <p style="margin-top: 15px">
                            <span style="color: #e62e04">
                                <?=$discountGoods[0]['cost']?>
                                <?
                                    if ($discountGoods[0]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                            </span>
                        </p>
                        <p style="text-decoration: line-through; font-size: 80%;">
                            <?=$discountGoods[0]['old_cost']?>
                                <?
                                    if ($discountGoods[0]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                        </p>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[5]['max(`discount`)'];?>%</p></div>
                    </div>
                </a>
                <? if(count($discountGoods) > 6):; ?>
                <div style="border-bottom: 1px solid #ddd;"></div>
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[6]['id']]);?>" class="a">
                    <div class="left-dis-cont-2">
                        <p class="left-dis-cont-1-p">
                            <? 
                                $goodsimg = json_decode($discountGoods[6]['image'], true);
                            ?>
                            <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[6]['id']?>/<?=$goodsimg['min']?>">
                        </p>
                        <p><?=$discountGoods[6]['name'];?></p>
                        <p style="margin-top: 15px">
                            <span style="color: #e62e04">
                                <?=$discountGoods[6]['cost']?>
                                <?
                                    if ($discountGoods[6]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                            </span>
                        </p>
                        <p style="text-decoration: line-through; font-size: 80%;">
                            <?=$discountGoods[6]['old_cost']?>
                                <?
                                    if ($discountGoods[6]['id_currency'] == 1) {
                                        echo "сум";
                                    }
                                    else {
                                        echo "у.е.";
                                    }
                                ?>
                        </p>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[6]['max(`discount`)'];?>%</p></div>
                    </div>
                </a>
                <? endif; ?>
            </div>
            <? if(count($discountGoods) > 7):; ?>
            <div class="right-dis-cont">
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[7]['id']]);?>" class="a">
                    <div class="right-dis-cont-1">
                        <div class="right-dis-cont-1-1">
                            <p><?=$discountGoods[7]['name'];?></p>
                            <p style="margin-top: 15px">
                                <span style="color: #e62e04">
                                    <?=$discountGoods[7]['cost']?>
                                    <?
                                        if ($discountGoods[7]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                                </span>
                            </p>
                            <p style="text-decoration: line-through; font-size: 80%;">
                                <?=$discountGoods[7]['old_cost']?>
                                    <?
                                        if ($discountGoods[7]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                            </p>
                        </div>
                        <div class="right-dis-cont-1-2">
                            <p class="right-dis-cont-1-2-p">
                                <? 
                                    $goodsimg = json_decode($discountGoods[7]['image'], true);
                                ?>
                                <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[7]['id']?>/<?=$goodsimg['min']?>">
                            </p>
                        </div>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[7]['max(`discount`)'];?>%</p></div>
                        <div class="clear"></div>
                    </div>
                </a>
                <? if(count($discountGoods) > 8):; ?>
                <div style="border-bottom: 1px solid #ddd;"></div>
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[8]['id']]);?>" class="a">
                    <div class="right-dis-cont-1">
                        <div class="right-dis-cont-1-1">
                            <p><?=$discountGoods[8]['name'];?></p>
                            <p style="margin-top: 15px">
                                <span style="color: #e62e04">
                                    <?=$discountGoods[8]['cost']?>
                                    <?
                                        if ($discountGoods[8]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                                </span>
                            </p>
                            <p style="text-decoration: line-through; font-size: 80%;">
                                <?=$discountGoods[8]['old_cost']?>
                                    <?
                                        if ($discountGoods[8]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                            </p>
                        </div>
                        <div class="right-dis-cont-1-2">
                            <p class="right-dis-cont-1-2-p">
                                <? 
                                    $goodsimg = json_decode($discountGoods[8]['image'], true);
                                ?>
                                <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[8]['id']?>/<?=$goodsimg['min']?>">
                            </p>
                        </div>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[8]['max(`discount`)'];?>%</p></div>
                        <div class="clear"></div>
                    </div>
                </a>
                <? endif; ?>
                <? if(count($discountGoods) > 9):; ?>
                <div style="border-bottom: 1px solid #ddd;"></div>
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $discountGoods[9]['id']]);?>" class="a">
                    <div class="right-dis-cont-1">
                        <div class="right-dis-cont-1-1">
                            <p><?=$discountGoods[9]['name'];?></p>
                            <p style="margin-top: 15px">
                                <span style="color: #e62e04">
                                    <?=$discountGoods[9]['cost']?>
                                    <?
                                        if ($discountGoods[9]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                                </span>
                            </p>
                            <p style="text-decoration: line-through; font-size: 80%;">
                                <?=$discountGoods[9]['old_cost']?>
                                    <?
                                        if ($discountGoods[9]['id_currency'] == 1) {
                                            echo "сум";
                                        }
                                        else {
                                            echo "у.е.";
                                        }
                                    ?>
                            </p>
                        </div>
                        <div class="right-dis-cont-1-2">
                            <p class="right-dis-cont-1-2-p">
                                <? 
                                    $goodsimg = json_decode($discountGoods[9]['image'], true);
                                ?>
                                <img class="discountedProductsdiv1img1" src="/images/goods/<?=$discountGoods[9]['id']?>/<?=$goodsimg['min']?>">
                            </p>
                        </div>
                        <div class="discount"><p class="discountp">-<?=$discountGoods[9]['max(`discount`)'];?>%</p></div>
                        <div class="clear"></div>
                    </div>
                </a>
                <? endif; ?>
            </div>
            <? endif; ?>
        </div>
        <? endif; ?>
        <div class="clear"></div>
    </div>
<? endif; ?>

<div class="clear"></div>

<div id="qualityMark">
    <div style="background: #eee; padding-bottom: 10px;">
        <p class="brandsp"><a href="#" style="color: red; text-decoration: none; margin-left: 10px;">Хиты продаж</a></p>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid red; margin-bottom: 15px;"></div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu largeactive" data-id="">Все</div>
    </div>
    <div class="qualityMarkdiv">
       <div class="a back hitsmenu" data-id="562">Женская одежда</div>
    </div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="563">Мужская одежда</div>
    </div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="600">Компьютеры</div>
    </div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="599">Телефоны</div>
    </div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="149">Для дома</div>
    </div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="565">Спортивная одежда</div>
    </div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="601">Тв / видеотехника</div>
    </div>
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="564">Обувь</div>
    </div> 
    <div class="qualityMarkdiv">
        <div class="a back hitsmenu" data-id="150">Детям и мамам</div>
    </div>
    <div class="clear"></div>
    <div style="margin-top: 20px;"></div>
    <ul style="margin: 0; padding: 0;" class="hits">

        <?foreach($goodsHits as $goodHit):?>
        <?
        $imageArr = json_decode($goodHit['image'], true);
        ?>
        <a href="<?=Url::toRoute(['/goods/view', 'id' => $goodHit['id']]);?>" class="a">
            <li class="tovar">
                <p class="tovar-p"><img class="qualityMarkimg" src="/images/goods/<?=$goodHit['id']?>/<?=$imageArr['min']?>"></p>
                <div style="padding-left: 10px; padding-right: 10px;">
                    <p style="font-size: 120%"><?=$goodHit['name']?></p>
                    <p style="font-size: 120%">
                        <?=$goodHit['cost']?>
                        <? if ($goodHit['id_currency'] == 1) {
                            echo "сум";
                        }else {
                            echo "у.е.";
                        } ?>
                    </p>
                </div>
            </li>
        </a>
        <?endforeach;?>
    </ul>
    <div class="clear"></div>
    <div style="margin-top: 10px; float: right;">
        <a href="<?=Url::toRoute(['/eshop/hitsall']);?>" class="qualityMarklink" style="margin-right: 5px;">Смотреть все</a>
    </div>

    <div class="clear"></div>
    <div style="margin-top: 15px;"></div>
</div>
    <div class="brandsdiv1">
        <div style="background: #eee;">
            <div style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; padding: 10px;">
                <p style="float: left; color: red">Мировые бренды</p>
                <p style="font-size: 90%; float: right;"><a href="<?=Url::toRoute(['/eshop/brands']);?>" class="a">Смотреть все</a></p>
                <div class="clear"></div>
            </div>
        </div>
        <div style="border-right: 1px solid #ddd; border-bottom: 1px solid #ddd;">
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <?foreach($companiesForeign as $companyForeign):?>
                <p><img src="/images/companies/<?=$companyForeign['id']?>/1<?//=$companyForeign['image']?>.jpeg" class="brandsdivimg"></p>
            <?endforeach;?>
            <div class="clear"></div>
        </div>
    </div>

    <div class="brandsdiv2">
        <div style="background: #eee;">
            <div style="border-bottom: 1px solid #ddd; padding: 10px;">
                <p style="float: left; color: red;">Местные бренды</p>
                        <p style="font-size: 90%; float: right;"><a href="<?=Url::toRoute(['/eshop/brands']);?>" class="a">Смотреть все</a></p>
                <div class="clear"></div>
            </div>
        </div>
        <div style="border-right: 1px solid #ddd; border-bottom: 1px solid #ddd;">
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <p><img src="/images/companies/2/1.png" class="brandsdivimg"></p>
            <?foreach($companiesLocal as $companyLocal):?>
                <p><a href="<?=Url::toRoute(['shop', 'id' => $companyLocal['id']]);?>"><img src="/images/companies/<?=$companyLocal['id']?>/1<?//=$companyLocal['image']?>.jpeg" class="brandsdivimg"></a></p>
            <?endforeach;?>
            <div class="clear"></div>
        </div>
        <!-- <div style="padding-top: 10px"></div> -->
    </div>
    <div class="clear"></div>
    <div style="background: #eee; padding-bottom: 10px;">
        <p class="brandsp"><a href="#" style="color: red; text-decoration: none; margin-left: 10px;">Популярные акции</a></p>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid red;"></div>
    <ul style="margin: 0; padding: 5px 0; background: #ddd; text-align: center;">
                        
        <a href="#" class="a">
        <li class="buyersSayblock">
            <p class="buyersSayblock-imgp"><img class="buyersSayimg" src="/images/discount/1.jpg"></p>
            <div style="padding-left: 10px; padding-right: 10px;">
                <p>Alina Esman</p>
                <p><b>999 999 999 сум</b></p>
                <p class="buyersSayblock-p">ПОДБОРКА КРАСИВЫХ СВИТЕРОВ</p>
                <p class="brandssm">Подробно</p>
            </div>
        </li>
        </a>

        <a href="#" class="a">
        <li class="buyersSayblock">
            <p class="buyersSayblock-imgp"><img class="buyersSayimg" src="/images/discount/1.jpg"></p>
            <div style="padding-left: 10px; padding-right: 10px;">
                <p>Вишня-калдышня</p>
                <p><b>999 999 999 сум</b></p>
                <p class="buyersSayblock-p">ПОДБОРКА ШЛЯП С ПОЛЯМИ. Приветствую, наверное, многие заметили, что я люблю головные уборы, а они, по ходу, любят меня)). Для любительниц шляп с широкими полями осенне-зимний сезон 15/16 и предстоящая</p>
                <p class="brandssm">Подробно</p>
            </div>
        </li>
        </a>

        <a href="#" class="a">
        <li class="buyersSayblock">
            <p class="buyersSayblock-imgp"><img class="buyersSayimg" src="/images/discount/1.jpg"></p>
            <div style="padding-left: 10px; padding-right: 10px;">
                <p>Julia Kamysh</p>
                <p><b>999 999 999 сум</b></p>
                <p class="buyersSayblock-p">5 МОИХ ЛУЧШИХ ПОКУПОК 2015 ГОДА. #2015_bestlook<br>Люблю эти вещи :).</p>
                <p class="brandssm">Подробно</p>
            </div>
        </li>
        </a>

        <a href="#" class="a">
        <li class="buyersSayblock">
            <p class="buyersSayblock-imgp"><img class="buyersSayimg" src="/images/discount/1.jpg"></p>
            <div style="padding-left: 10px; padding-right: 10px;">
                <p>Дана_Р.</p>
                <p><b>999 999 999 сум</b></p>
                <p class="buyersSayblock-p">ПОДБОРКА ВЕСЕННИХ<br>СТЕГАННЫХ КУРТОК<br>Не за горами весна и я нахожусь в поиске новой интересной, легкой и удобной курточки, поделюсь тем, что мне понравилось, возможно понравится и вам).</p>
                <p class="brandssm">Подробно</p>
            </div>
        </li>
        </a>

        <a href="#" class="a">
        <li class="buyersSayblock">
            <p class="buyersSayblock-imgp"><img class="buyersSayimg" src="/images/discount/1.jpg"></p>
            <div style="padding-left: 10px; padding-right: 10px;">
                <p>JazzGirlsAround</p>
                <p><b>999 999 999 сум</b></p>
                <p class="buyersSayblock-p">Привет! Сегодня в рубрике ВЕЩЬ ДНЯ - рюкзак известного лейбла Grafea. История бренда и ссылки на реплики внутри поста.</p>
                <p class="brandssm">Подробно</p>
            </div>
        </li>
        </a>

    </ul>

</div>
<div class="clear"></div>

<script type="text/javascript">
    $(function(){
        $('.hitsmenu').click(function(){
            var etot = $(this);
            var id = $(this).attr('data-id');
            $.ajax({
                url: '/eshop/hitsindex',
                type: 'get',
                data: {
                    id: id
                },
                success: function (data) {
                    if(data){
                        $('.hits').html(data);
                        $('.hitsmenu').removeClass('largeactive');
                        etot.addClass('largeactive');
                    }
                    else {
                        $('.hits').html('');
                        $('.hitsmenu').removeClass('largeactive');
                        etot.addClass('largeactive');
                    }
                }
            });
        });
    });
</script>