<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\helpers\Url;
use frontend\models\Desired;
use frontend\models\RatingCompanies;
use frontend\models\Subscribe;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$imageArr = json_decode($good['image'], true);
$imageArr1 = json_decode($good['image'], true);
$galleryArr = json_decode($good['gallery'], true);

$ip_user = $_SERVER['REMOTE_ADDR'];
$desired = Desired::find()->where(['ip_user' => $ip_user, 'id_good' => $good->id])->count();
$desiredID = Desired::find()->select('id')->where(['ip_user' => $ip_user, 'id_good' => $good->id])->one();
$desiredID = $desiredID->id;

$id_user = \Yii::$app->user->id;
$id_shop = $company->id;

$subscribe = Subscribe::find()->where(['id_user' => $id_user, 'id_shop' => $id_shop])->count();
$subscribeID = Subscribe::find()->select('id')->where(['id_user' => $id_user, 'id_shop' => $id_shop])->one();
$subscribeID = $subscribeID->id;



$id_company = $company->id;

$voteAll = RatingCompanies::find()->where(['id_company' => $id_company])->count();
$stars = RatingCompanies::find()->select('star')->where(['id_company' => $id_company])->all();
$starsAll = 0;
foreach ($stars as $key => $star) {
    $starsAll = $starsAll + $star->star;
}

$starWidth = 17;//ширина одной звезды

if ($voteAll) {
    $rating = ($starsAll/$voteAll); //Старый рейтинг
    $rating = round($rating, 2);
}
else {
    $rating = 0;
}
$ratingResCss = $rating*$starWidth;

//vd($good);

?>
<div class="clear"></div>
<div style="margin-top: 15px;"></div>
<div id="containertop">
    <div class="containertopdiv">
        <div class="containertopdivdiv1">
            <div class="philips-rating">
                <div class="philips-rating-magazin">
                    <input type="hidden" class="idcompany" value="<?=$company['id']?>">
                    Магазин: <a href="<?=Url::toRoute(['/eshop/shop', 'id' => $company['id']]);?>" class="a"><b><?=$company['name']?></b></a>
                </div>
                <div class="philips-rating-rating">
                    Рейтинг:
                </div>
                <div class="philips-rating-name-rat">
                    <div id="ratingBar">
                        <a href="<?=Url::toRoute(['/eshop/shop', 'id' => $company['id']]);?>" class="a">
                            <div id="rating-none">
                                <div id="ratZero"></div>
                                <div id="ratDone" style="width: <?=$ratingResCss?>px"></div>
                            </div>
                        </a>
                        <div id="ratStat">Рейтинг: <strong><?=$rating;?></strong> Голосов: <strong><?=$voteAll;?></strong></div>
                    </div>
                </div>
                <div class="philips-rating-podpisatsya">
                    <?if(Yii::$app->user->isGuest):?>
                        <div class="elect11">Подписаться в магазин</div>
                    <?else:?>
                        <div class="subscribe <? if ($subscribe > 0) { echo "subscribe-true"; } else { echo "subscribe-false"; }?>" data-deleteid="<?=$subscribeID?>"><? if ($subscribe > 0) { echo "Удалить подписку"; } else { echo "Подписаться в магазин"; }?></div>
                    <?endif;?>
                </div>
                <div class="philips-rating-zakazov">
                    Число заказов: <? if ($good->orders) { echo $good->orders; } else {echo '0';} ?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <p style="font-size: 80%">
                <a href="#" class="a">домой</a> > <a href="#" class="a">Все категории</a> > <a href="#" class="a">Компьютеры и сетевое оборудование</a> > <a href="#" class="a">Планшетные компьютеры</a>
            </p>
        </div>
    </div>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
</div>
<div id="container">
<div class="clear"></div>

<div id="content">
    <div class="floating">
        <div class="contentleft">
            <div class="ads-container">
                <div class="ads-img">
                    <img src="/images/goods/<?=$good['id']?>/<?=$imageArr['max']?>" id="0" onclick="adsImgPopup(this)"/></a>
                </div>
                <div class="desirable <? if ($desired > 0) { echo "desirable-true"; } else { echo "desirable-false"; }?>" data-ip="<?=$_SERVER['REMOTE_ADDR']?>" data-id="<?=$good->id?>" data-deleteid="<?=$desiredID?>"></div>
            </div>
            <?$i=0;?>
            <? //vd($galleryArr, false); ?>
            <div class="ads-img-min">
                <div class="ads-it">
                    <img src="/images/goods/<?=$good['id']?>/<?=$imageArr['max']?>" id="<?=$i?>" alt="" onclick='adsImg(this);'/>
                </div>
                <?$i++?>
                <? if($galleryArr): ?>
                    <?foreach($galleryArr as $galleryImage):?>
                        <? //vd($galleryImage, false); ?>
                        <div class="ads-it">
                            <img src="/images/goods/<?=$good['id']?>/gallery/<?=$galleryImage['max']?>" id="<?=$i?>" alt="" onclick='adsImg(this);'/>
                        </div>
                        <?$i++?>
                    <?endforeach;?>
                <? endif; ?>
            </div>
        </div>
    </div>

    <div class="contentright">
        <form>

            <p><b><?=$good['name']?></b></p>

            <div class="clear"></div>
            <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px;"></div>
            <div class="goods-view-cost">
                <div class="goods-view-cost-name">
                    Цена:
                </div>
                <div class="goods-view-cost-cost">
                    <? if ($good['discount']): ?>
                        <p style="float: left; margin-right: 20px;">
                            <del style="font-size: 100%; color: #999;"><?=number_format($good['old_cost'], '0', ',', ' ');?> <?=($good['id_currency'] == 1)?'сум':'у.е.';?></del>
                        </p>
                        <p>
                            <span style="background: red; color: #fff; padding: 3px 5px;">-<?=$good['discount'];?>%</span>
                        </p>
                        <p>
                            <span style="font-size: 130%; color: red;"><?=number_format($good['cost'], '0', ',', ' ');?> <?=($good['id_currency'] == 1)?'сум':'у.е.';?></span> / шт.
                        </p>
                    <? else: ?>
                        <span style="font-size: 130%; color: red;"><?=number_format($good['cost'], '0', ',', ' ');?> <?=($good['id_currency'] == 1)?'сум':'у.е.';?></span> / шт.
                    <? endif; ?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="goods-view-share">
                <div class="goods-view-share-img">
                    <span class="goods-view-share-img-name">Поделиться</span>
                    <div class="goods-view-social-container">
                        <div class="goods-view-social">
                            <a href="#" class="a">
                                <div class="goods-view-social-img1">
                                    <div class="goods-view-social-img-name">Facebook</div>
                                    <a name="fb_share"></a> 
                                    <script src="https://www.facebook.com/connect.php/js/FB.Share" type="text/javascript"></script>
                                </div>
                            </a>
                            <a href="#" class="a">
                                <div class="goods-view-social-img2">
                                    <div class="goods-view-social-img-name">Twitter</div>
                                </div>
                            </a>
                            <a href="#" class="a">
                                <div class="goods-view-social-img3">
                                    <div class="goods-view-social-img-name">Google+</div>
                                </div>
                            </a>
                            <a href="#" class="a">
                                <div class="goods-view-social-img4">
                                    <div class="goods-view-social-img-name">Вконтакте</div>
                                </div>
                            </a>
                            <a href="#" class="a">
                                <div class="goods-view-social-img5">
                                    <div class="goods-view-social-img-name">Одноклассники</div>
                                </div>
                            </a>
                            <a href="#" class="a">
                                <div class="goods-view-social-img6">
                                    <div class="goods-view-social-img-name">Instagram</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px;"></div>
            <div class="clear"></div>
            <table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100" style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Состояние:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p>
                            <b>Новое</b>
                        </p>

                    </td>
                </tr>
                <?
                    foreach ($goodsFields as $key => $goodsField) {
                        if ($goodsField->name == 'Цвет') {
                            $id_goods_field = $goodsField->id;
                        }
                    }
                    foreach ($goodsFieldsValues as $key => $goodsFieldsValue) {
                        if ($goodsFieldsValue['id_goods_field'] == $id_goods_field) {
                            $colors = $goodsFieldsValue['value'];
                        }
                    }
                    if ($colors):
                    $colors = explode(',', $colors);
                ?>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Цвет:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p class="chek">
                            <?
                                //vd($colors, false);
                                foreach ($colors as $key => $color):?>
                                    <input type="radio" class="goodColor" name="color" value="<?=$color?>" id="color<?=$key?>" <? if ($key == 0) { echo "checked"; } ?>><label for="color<?=$key?>"><?=$color?></label>
                                <? endforeach; ?>
                        </p>
                    </td>
                </tr>
                <? endif; ?>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Размер:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p class="chek">
                            <input type="radio" class="goodSize" name="size" value="XL" id="size1" checked><label for="size1">XL</label>
                            <input type="radio" class="goodSize" name="size" value="XXXL" id="size2"><label for="size2">XXXL</label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Доставка:</p>
                    </td style="padding-bottom: 15px;">
                    <td style="padding-bottom: 15px;">
                        <p>
                            Бесплатная доставка по Узбекистану
                        </p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Гарантия:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p class="chek" style="padding-bottom: 10px;">
                            1 год
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Количество:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p>
                            <span style="padding: 5px 10px; cursor: pointer;" onclick="formminus()"><b>-</b></span><input id="number" type="text" name="number" value="1" style="border: 1px solid #ddd; width: 40px; padding: 5px; text-align: center;"><span style="padding: 5px 10px; cursor: pointer;" onclick="formpilus()"><b>+</b></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 10px; padding-bottom: 10px">
                        <a href="#" class="zakazdobavit">Заказать</a>
                        <?if(Yii::$app->user->isGuest):?>
                            <a href="javascript:void(0);" class="zakazdobavit add3cart">Добавить в корзину</a>
                        <?else:?>
                            <a href="javascript:void(0);" data-id="<?=$good->id?>" class="zakazdobavit add2cart">Добавить в корзину</a>
                        <?endif;?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="width: calc(100% - 5px); border: 1px solid #ddd; text-align: center; float: left; margin-right: 5px;">
                            <div style="margin-top: 5px; margin-bottom: 5px "></div>
                            <p style="text-align: center"><b>Связаться с продавцом</b></p>
                            <div style="margin-top: 5px; margin-bottom: 5px"></div>
                            <div class="clear"></div>
                            <div class="svyazatsyasprodavsom">
                                <p>Телефон: <b><?=$company['phone']?></b></p>
                                <p>
                                    <!-- <span style="margin-right: 10px;"><img src="<?=$layoutPath?>/images/product/note.png" width="20"></span> -->
                                    <span class="order" style="cursor: pointer; color: red">Отправить сообщение</span>
                                </p>
                                <div class="product-popup">
                                    <div class="product-overlay"></div>
                                    <div class="product-form-popup">
                                        <div class="popup-content">
                                            <h4>Чтобы оставить сообщения авторизуйтесь</h4>
                                            <p><a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a></p>
                                            <h4>Если у вас нет аккаунта зарегистрируйтесь</h4>
                                            <p><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></p>
                                            <div style="border-bottom: 1px solid red;"></div>
                                            <h4>Отправить сообщение</h4>
                                            <form action="" method="POST">
                                                <textarea style="width: 98%; height: 80px; resize: none"></textarea>
                                                <input type="submit">
                                            </form>
                                        </div>
                                        <div class="product-close"></div>
                                    </div>
                                </div>
                            </div>
                            <div  class="svyazatsyasprodavsom">
                                <p><a href="#" class="magazin">Перейти к магазину</a></p>
                                <div style="margin-top: 5px; margin-bottom: 5px"></div>
                                <p>Продавец: <span style="color: green"><b>Online</b></span> или <span style="color: red"><b>Offline</b></span></p>
                            </div>
                            <div class="clear"></div>
                            <div style="margin-top: 5px; margin-bottom: 5px"></div>
                        </div>
                        <!-- <div style="width: calc(60% - 14px); border: 1px solid #ddd; padding: 5px; float: left">
                            <p style="text-align: center"><b>Короткое описание товара</b></p>
                            <p>
                                двухдиапазонный модуль Wi-Fi; Q Pair - позволяет синхронизироваться со смартфонами на ОС Android для совместной работы; поддержка форматов AMR, MIDI
                            </p>
                        </div> -->
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px;" valign="top">
                        <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px "></div>
                        <p style="font-size: 90%">Возврат<br>товара:</p>
                    </td>
                    <td valign="top" style="padding-bottom: 15px;">
                        <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px"></div>
                        <p style="font-size: 90%">
                            Если товар не соответствует описанию, вы можете вернуть товар, оплатив стоимость обратной пересылки, или оставить товар себе и договориться о компенсации с продавцом. <a href="#" class="a">Узнать подробнее</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Гарантии<br>продавца:</p>
                    </td>
                    <td valign="top">
                        <p style="font-size: 90%">
                            Доставка в срок <b>60дн.</b> (Возврат полной стоимости, если товар не получен в течение <b>60 дней</b>)
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Оплата:</p>
                    </td>
                    <td valign="top">
                        <img src="<?=$layoutPath?>/images/footer/payment/1.jpg" class="apadding">
                        <img src="<?=$layoutPath?>/images/footer/payment/2.jpg" class="apadding">
                        <img src="<?=$layoutPath?>/images/footer/payment/3.png" class="apadding">
                        <img src="<?=$layoutPath?>/images/footer/payment/4.jpg" class="apadding">
                        <img src="<?=$layoutPath?>/images/footer/payment/5.jpg" class="apadding">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td>
                                    <img src="<?=$layoutPath?>/images/product/cart.png">
                                </td>
                                <td style="padding-left: 10px;" valign="top">
                                    <p style="font-size: 150%">Защита Покупателя</p>
                                    <p style="font-size: 90%"><img src="<?=$layoutPath?>/images/product/check.png" style="margin-right: 10px;"><b>Полный возврат</b> если Вы не получили товар</p>
                                    <p style="font-size: 90%"><img src="<?=$layoutPath?>/images/product/check.png" style="margin-right: 10px;"><b>Возврат платежа</b> при несоответствии описанию</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p style="text-align: right;"><a href="#" class="a">Узнать подробнее</a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="clear"></div>
    <div class="ft"></div>
    <div style="border-bottom: 1px solid red;"></div>

    <script type="text/javascript">
        $(function(){
            if ($(window).width() > 650){
                var topPos = $('.floating').offset().top;
                $(window).scroll(function() {
                    var top = $(document).scrollTop(),
                            pip = $('.ft').offset().top,
                            height = $('.floating').outerHeight();

                    if (top > topPos && top < pip - height) {
                        $('.contentright').css('margin-left', '42%');
                        $('.floating').addClass('fixed').removeAttr("style");
                    }
                    else if (top > pip - height) {
                        $('.floating').removeClass('fixed').css({'position':'absolute', 'left':'0', 'bottom':'0'});
                    }
                    else {
                        $('.contentright').css('margin-left', '0');
                        $('.floating').removeClass('fixed');
                    }
                });
            }
        });
    </script>
    <div class="contentlt">
        <p><b><a href="#" class="a">6318</a></b></p>
        <p><b><a href="#" class="a">97,8%</a></b> положительных отзывов</p>
        <div class="menu" style="margin-top: 5px;">
            <p>
                Подробные отзывы о продавце
            </p>
            <div class="submenuproduct">
                <p style="padding: 10px; font-size: 90%">
                    5-балльная шкала<br>
                    Соответствие описанию:4.7 Выше среднего<br>
                    Общение с продавцом:4.6 Выше среднего<br>
                    Скорость доставки:4.5 Выше среднего
                </p>
            </div>
        </div>
        <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px"></div>
        <p>Товарные категории продавца</p>
        <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>
        <?foreach($categories as $category):?>
        <div class="leftsub">
            <?if($category['id_parent'] == 0):?>
            <p><a href="<?=Url::toRoute(['/category/view/', 'id' => $category['id']]);?>" class="a"><?=$category['name']?></a></p>
            <div class="sub">
                <?foreach($categories as $category2):?>
                    <?if($category2['id_parent'] == $category['id']):?>
                    <p><a href="<?=Url::toRoute(['/category/view/', 'id' => $category2['id']]);?>" class="a"><?=$category2['name']?></a></p>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <?endif;?>
        </div>
        <?endforeach;?>

        <div>
            <p style="float: right;"><a href="#" class="a">Посмотреть ещё</a></p>
        </div>

        <div class="clear"></div>

        <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px"></div>

        <div>
            <p style="text-align: left;">Самые продаваемые товары этого продавца</p>
        </div>

        <?foreach($goodsHits as $goodHits):?>
        <?
            $imageArr = json_decode($goodHits['image'], true);
        ?>
        <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

        <a href="<?=Url::toRoute(['/goods/view/', 'id' => $goodHits['id']]);?>" class="a">
            <div>
                <p style="text-align: center;">
                    <img src="/images/goods/<?=$goodHits['id']?>/<?=$imageArr['min']?>">
                </p>
                <p><?=$goodHits['name']?></p>
                <p><span style="color: red; font-size: 120%"><?=$goodHits['cost']?></span> / piece</p>
                <p>Recent Orders (1001)</p>
            </div>
        </a>
        <?endforeach;?>

        <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>
    </div>
    <div class="contentrt">
        <div style="padding-top: 10px">
            <div>
                <p style="background-color: #eee; padding: 5px 10px">
                    Характеристики товара
                </p>
            </div>
            <div class="goods-opisaniya">
                <div style="margin-top: 10px;"></div>
                <?//vd($goodsFieldsValues, false)?>
                <?foreach($goodsFields as $goodsField):?>
                    <p style="padding-bottom: 5px">
                        <span style="color: #888"><?=$goodsField['name'];?>: </span>
                        <?foreach($goodsFieldsValues as $goodsFieldsValue){
                            if($goodsFieldsValue['id_goods_field'] == $goodsField['id'])
                                    echo $goodsFieldsValue['value'];
                            }?>
                    </p>
                <?endforeach;?>
                <!-- <p style="padding-bottom: 5px">
                    <span style="color: #888">Тип изделия: </span>Планшетный ПК
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Интернет: </span>Встроенный 3G,Bluetooth,Wi-Fi
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Порт расширения: </span>Разъём для наушников,TF-карта,USB
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Вес нетто: </span>500g
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Камера: </span>Вторая веб-камера
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Тип сенсорного экрана: </span>Ёмкостный экран
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Частота процессора: </span>Четырёхъядерный
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Объём памяти: </span>2 ГБ
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Вторая веб-камера: </span>3 MP
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Разрешение дисплея: </span>1024x600
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Модель процессора: </span>MT6582
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Other: </span>HSD-007
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Объём памяти планшета: </span>16 ГБ
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Размер экрана: </span>10 дюймов
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Упаковка: </span>Да
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Поддерживает язык: </span>Английский, Русский, Испанский, Шведский
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Производитель процессора: </span>MTK
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Google играть: </span>Да
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Особенности: </span>GPS,Мультитач,Датчик G,Телефонный звонок
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Состояние: </span>Новое
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Операционная система: </span>Android 4.4
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Емкость клетки: </span>5000mAh
                </p>
                <p style="padding-bottom: 5px">
                    <span style="color: #888">Производитель:</span>Другой
                </p> -->
            </div>

            <div class="clear"></div>
            <div style="margin-top: 10px"></div>
            <div>
                <p style="background-color: #eee; padding: 5px 10px">
                    Описание товара
                </p>
            </div>
            <div style="font-size: 85%; color: #888">
                <?=$good->text; ?>
                <!-- <p style="padding-bottom: 5px; padding-top: 5px;">
                    Комплект 1: Стандартный Пакет (таблетки + кабель для передачи данных + Зарядное устройство)
                </p>
                <p style="padding-bottom: 5px">
                    Комплект 2: Добавить OTG кабель (Планшет + кабель для передачи данных + Зарядное устройство + OTG кабель)
                </p>
                <p style="padding-bottom: 5px">
                    Комплект 3: Добавить Bluetooth-гарнитура (Планшет + кабель для передачи данных + Зарядное устройство + Bluetooth-гарнитура)
                </p>
                <p style="padding-bottom: 5px">
                    Комплект 4: Добавить 16 ГБ TF карты (Планшет + кабель для передачи данных + Зарядное устройство + 16 ГБ TF карты)
                </p>
                <p style="padding-bottom: 5px">
                    Комплект 5: Добавить 32 ГБ TF карты (Планшет + кабель для передачи данных + Зарядное устройство + 32 ГБ TF карты)
                </p> -->
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
</div>
<?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>

<? $j=0; ?>
<div class="ads-popup">
    <div class="ads-overlay"></div>
    <div style="max-width: 1400px; margin: auto; position: relative;">
    <h1 style="font-size: 150%; color: #fff;"><?=$good['name']?></h1>
    <div class="ads-popup-img">
        <div class="ads-img-popup" id="adsimg">
            <img style="transition: all ease .5s;" src="<?=$firstImage?>" id="0"/></a>
        </div>

        <div class="ads-img-min-popup">
            <div class="ads-it">
                <img src="/images/goods/<?=$good['id']?>/<?=$imageArr1['max']?>" id="<?=$j?>" alt="" onclick='adsImgView(this);'/>
            </div>
            <?$j++?>
            <? if($galleryArr): ?>
                <?foreach($galleryArr as $galleryImage):?>
                    <div class="ads-it">
                        <img src="/images/goods/<?=$good['id']?>/gallery/<?=$galleryImage['max']?>" id="<?=$j?>" alt="" onclick='adsImgView(this);'/>
                    </div>
                    <?$j++?>
                <?endforeach;?>
            <? endif; ?>
        </div>
        <div class="ads-prev"></div>
        <div class="ads-next"></div>
    </div>
    <div class="ads-popup-right">
        <div class="ads-cost">
            <!-- 1 000 000 000 -->
            <?=number_format($model->cost, 0, ',', ' ')?>
            <? if ($model->id_currency == 1) {
                echo "сум";
            }else {
                echo "у.е.";
            } ?>
        </div>
        <span style="display: block; text-align: center">
            <a href="#" style="background-color: red; color: #fff; text-decoration: none; padding: 5px 10px; border-radius: 5px; font-size: 120%; white-space: nowrap; line-height: 50px;">Заказать</a>
            <a href="#" style="background-color: red; color: #fff; text-decoration: none; padding: 5px 10px; border-radius: 5px; font-size: 120%; white-space: nowrap; line-height: 30px;">Добавить в корзину</a>
        </span>
        <div class="clear"></div>
        <div style="border-bottom: 1px solid #555; margin-top: 10px;"></div>
        <p style="display: block; margin: 10px 0; color: #fff; font-size: 100%">
            <span class="ads-user-gray"></span><?=$company['name']?>
        </p>
        <div style="border-bottom: 1px solid #555;"></div>
        <div style="color: #fff; font-size: 120%; display: block; margin: 10px 0;">
            <span class="ads-mobile2-gray"></span><?=$company['phone']?>
        </div>
        <div class="clear"></div>
        <div style="border-bottom: 1px solid #555;"></div>
        <div style="display: block; margin: 10px 0 30px 0; color: #fff; font-size: 90%">
            <span class="ads-markerloc2"></span>
            <?=$company['address']?>
        </div>
        <div style="border-bottom: 1px solid #555;"></div>
    </div>
    <div class="close-ads"></div>
    </div>
</div>
<div class="clear"></div>

<div class="product-popup-cart">
    <div class="product-overlay"></div>
    <div class="product-form-popup">
        <div class="popup-content">
            <h4>
                Товар был добавлен в корзину. Товаров в Вашей корзине: <span class="catrgoods"></span>
            </h4>
            <div>
                <button onclick="javascript: location.href = '<?=Url::toRoute('/cart/index')?>'">Перейти к корзине</button>
                <button class="product-close-butoon" onclick="javascript: $('.product-popup-cart').css('display', 'none');">Вернуться к сайту</button>
            </div>
        </div>
        <div class="product-close"></div>
    </div>
</div>

<div class="product-popup-cart-guest">
    <div class="product-overlay"></div>
    <div class="product-form-popup">
        <div class="popup-content">
            <h4>Чтобы добавить товар в корзину авторизуйтесь</h4>
            <p><a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a></p>
            <h4>Если у вас нет аккаунта зарегистрируйтесь</h4>
            <p><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></p>
        </div>
        <div class="product-close"></div>
    </div>
</div>

<div class="product-popup-cart-elect">
    <div class="product-overlay"></div>
    <div class="product-form-popup">
        <div class="popup-content">
            <h4>Чтобы подписаться в магазин авторизуйтесь</h4>
            <p><a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a></p>
            <h4>Если у вас нет аккаунта зарегистрируйтесь</h4>
            <p><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></p>
        </div>
        <div class="product-close"></div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $('.elect11').click(function(){
            $('.product-popup-cart-elect').css('display', 'block');
        });
        <?if(!(Yii::$app->user->isGuest)):?>
            $('.subscribe').click(function(){

                var shopClass = $(this).attr('class').split(' ');
                var userID = <?=Yii::$app->user->id?>;
                var shopID = <?=$company->id;?>;
                var shopDelete = $(this).attr('data-deleteid');
                shopClass = shopClass[1];

                if (shopClass == 'subscribe-false') {
                    $.ajax({
                        url: '/eshop/subscribeadd',
                        type: 'get',
                        data: {
                            id_user: userID,
                            id_shop: shopID
                        },
                        success: function (data) {
                            if(data){
                                $('.subscribe').attr('data-deleteid', data);
                                $('.subscribe').removeClass('subscribe-false');
                                $('.subscribe').addClass('subscribe-true');
                                $('.subscribe').html('Удалить подписку');
                            }
                        }
                    });
                }

                if (shopClass == 'subscribe-true') {
                    $.ajax({
                        url: '/eshop/subscribedelete',
                        type: 'get',
                        data: {
                            id_user: userID,
                            id_delete: shopDelete
                        },
                        success: function (data) {
                            if(data == 'ok'){
                                $('.subscribe').removeClass('subscribe-true');
                                $('.subscribe').addClass('subscribe-false');
                                $('.subscribe').html('Подписаться в магазин');
                            }
                        }
                    });
                }

            });
        <? endif; ?>
    });
</script>