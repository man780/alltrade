<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/16/16
 * Time: 10:26 AM
 * To change this template use File | Settings | File Templates.
 */

use yii\helpers\Url;

?>
<?=$this->render('/layouts/_eshopmenu', ['layoutPath'=>$layoutPath, 'id'=>$id]);?>

<div class="topslideronlineshop">
    <div class="flex-container">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?=$layoutPath?>/images/slide/1.jpg"/>
                </li>

                <li>
                    <img src="<?=$layoutPath?>/images/slide/2.jpg"/>
                </li>

                <li>
                    <img src="<?=$layoutPath?>/images/slide/3.jpg"/>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            $('.flexslider').flexslider({
                animation: 'fade',
                controlsContainer: '.flexslider'
            });

        });
    </script>
</div>
<div id="container">
    <div class="clear"></div>
    <div style="margin-top: 10px;"></div>
    <div class="proproduct">
        <h2 style="color: red; margin: 0; padding: 10px;">ТОВАРЫ СО СКИДКАМИ</h2>
        <div class="clear"></div>
        <div style="border-bottom: 1px solid red;"></div>
        <ul class="tovarpro-discount-container">
            <?foreach($goodsDiscount as $goodDiscount):?>
            <?
            $imageArr = json_decode($goodDiscount['image'], true);
            ?>
             <a href="<?=Url::toRoute(['/goods/view', 'id' => $goodDiscount['id']])?>" class="a">
                <li class="tovarpro-discount">
                    <div class="tovarpro-discount-p"><img src="/images/goods/<?=$goodDiscount['id']?>/<?=$imageArr['min'];?>"></div>
                    <div style="padding-left: 10px; padding-right: 10px;">
                        <p class="tovarpro-discount-p-p"><?=$goodDiscount['name']?></p>
                        <p class="tovarpro-discount-cost"><?=number_format($goodDiscount['cost'], 0, ',', ' ')?> <?=($goodDiscount['id_currency']==2)?'у.е.':'сум';?></p>
                        <div class="tovarpro-discount-order">Заказать</div>
                    </div> 
                    <div class="discount"><p class="discountp">-<?=$goodDiscount['discount']?>%</p></div>
                </li>
            </a>
            <?endforeach;?>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="proproduct">
        <h2 style="color: red; margin: 0; padding: 10px;">НОВЫЕ ПОСТУПЛЕНИЯ</h2>
        <div class="clear"></div>
        <div style="border-bottom: 1px solid red;"></div>
        <ul class="tovarpro-discount-container">
            <?foreach($goodsNew as $goodNew):?>
            <?
            $imageArr = json_decode($goodNew['image'], true);
            ?>
            <a href="<?=Url::toRoute(['/goods/view', 'id' => $goodNew['id']])?>" class="a">
                <li class="tovarpro-discount">
                    <div class="tovarpro-discount-p"><img src="/images/goods/<?=$goodNew['id']?>/<?=$imageArr['min'];?>"></div>
                    <div style="padding-left: 10px; padding-right: 10px;">
                        <p class="tovarpro-discount-p-p"><?=$goodNew['name']?></p>
                        <p class="tovarpro-discount-cost"><?=number_format($goodNew['cost'], 0, ',', ' ')?> <?=($goodNew['id_currency']==2)?'у.е.':'сум';?></p>
                        <div class="tovarpro-discount-order">Заказать</div>
                    </div>
                </li>
            </a>
            <?endforeach;?>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<div class="pro-container">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="text-align: center; color: #fff; padding: 15px 0;">ТОВАРЫ С АКЦИИ</h2>
        <section class="regular slider">
            <?foreach($goodsPromotion as $goodPromotion):?>
            <?
            $imageArr = json_decode($goodPromotion['image'], true);
            ?>
            <div>
                <a href="<?=Url::toRoute(['/goods/view', 'id' => $goodPromotion['id']])?>"><img src="/images/goods/<?=$goodPromotion['id']?>/<?=$imageArr['min'];?>"></a>
            </div>
            <?endforeach;?>
        </section>

        <script type="text/javascript">
            $(function() {
                $(".regular").slick({
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: true,
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 300,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        </script>
        <div class="clear"></div>
        <div style="padding-top: 20px;"></div>
    </div>
</div>
<div id="container">
    <div class="clear"></div>
    <div style="margin-top: 15px;"></div>
    <div class="proproduct">
        <h2 style="color: red; margin: 0; padding: 10px;">ХИТЫ ПРОДАЖ</h2>
        <div class="clear"></div>
        <div style="border-bottom: 1px solid red;"></div>
        <ul class="tovarpro-discount-container">
            <?foreach($goodsHits as $goodHits):?>
            <?
            $imageArr = json_decode($goodHits['image'], true);
            ?>
            <a href="<?=Url::toRoute(['/goods/view', 'id' => $goodHits['id']])?>" class="a">
                <li class="tovarpro-discount">
                    <div class="tovarpro-discount-p"><img src="/images/goods/<?=$goodHits['id']?>/<?=$imageArr['min'];?>"></div>
                    <div style="padding-left: 10px; padding-right: 10px;">
                        <p class="tovarpro-discount-p-p"><?=$goodHits['name']?></p>
                        <p class="tovarpro-discount-cost"><?=number_format($goodHits['cost'], 0, ',', ' ')?> <?=($goodHits['id_currency']==2)?'у.е.':'сум';?></p>
                        <div class="tovarpro-discount-order">Заказать</div>
                    </div>
                </li>
            </a>
            <?endforeach;?>
        </ul>
    </div>
    <div class="clear"></div>
</div>