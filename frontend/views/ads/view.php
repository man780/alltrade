<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ads */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clear"></div>
<div style="margin-top: 15px; border-bottom: 1px solid #ddd"></div>

<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 10px; border-bottom: 1px solid #ddd; padding-left: 10px;">
            <div class="menu">
                <p style="font-size: 80%">
                    Магазин:
                    <b><a href="#" class="a apadding">Shenzhen Mon-top Technology Co.,Ltd 1</a></b>
                    <span class="apadding">Лет работы:1.</span>
                    <span class="apadding">5852</span>
                    <span class="apadding">98.4%</span>
                    <span class="apadding">положительных отзывов</span>
                </p>
                <div class="submenuproduct">
                    <p style="padding: 10px; font-size: 80%">
                        Магазин №1726156<br>
                        Guangdong China (Mainland)<br>
                        Этот магазин был открыт<br>
                        Детальный рейтинг продавца(из 5)<br>
                        Соответствие описанию:4.7 Выше среднего<br>
                        Общение с продавцом:4.8 Выше среднего<br>
                        Скорость доставки:4.6 Выше среднего<br>
                    </p>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td style="padding: 10px; border-bottom: 1px solid #ddd; padding-left: 10px;">
            <p style="font-size: 80%">
                <a href="#" class="a">домой</a> > <a href="#" class="a">Все категории</a> > <a href="#" class="a">Компьютеры и сетевое оборудование</a> > <a href="#" class="a">Планшетные компьютеры</a>
            </p>
        </td>
    </tr>
</table>

<div class="clear"></div>

<div id="content">
    <div class="floating">
        <div class="contentleft">

        <div class="img">
            <a href="product/img/1.jpg"  rel="example_group" id="adpdp14">
                <img src="product/img/1.jpg" id="dp14" style="margin-bottom: 3px; max-width: 100%;" alt="" /></a>
        </div>
        <div class="thumbs">
            <div class="it">
                <a style="display:none;" href="product/img/1.jpg" rel="example_group"></a>
                <img src="product/img/1.jpg" onclick='setBigImage(this);' alt="" />
            </div>
            <div class="it">
                <a style="display:none;" href="product/img/2.jpg" rel="example_group"></a>
                <img src="product/img/2.jpg" onclick='setBigImage(this);' alt="" />
            </div>
            <div class="it">
                <a style="display:none;" href="product/img/3.jpg" rel="example_group"></a>
                <img src="product/img/3.jpg" onclick='setBigImage(this);' alt="" />
            </div>
            <div class="it">
                <a style="display:none;" href="product/img/4.jpg" rel="example_group"></a>
                <img src="product/img/4.jpg" onclick='setBigImage(this);' alt="" />
            </div>
            <div class="it">
                <a style="display:none;" href="product/img/5.jpg" rel="example_group"></a>
                <img src="product/img/5.jpg" onclick='setBigImage(this);' alt="" />
            </div>
            <div class="it">
                <a style="display:none;" href="product/img/6.jpg" rel="example_group"></a>
                <img src="product/img/6.jpg" onclick='setBigImage(this);' alt="" />
            </div>
            <div class="clr"></div>
        </div>

    </div>
    </div>

    <div class="contentright">
            <form>

            <p><?=$model->name?></p>

            <div class="menu" style="float: left; margin-right: 10px;">
                <p>
                    <img src="images/product/content/star.png" width="15" height="15">
                    <img src="images/product/content/star.png" width="15" height="15">
                    <img src="images/product/content/star.png" width="15" height="15">
                    <img src="images/product/content/star.png" width="15" height="15">
                    <img src="images/product/content/star.png" width="15" height="15">
                    5.0
                                            <span style="font-size: 80%">
                                                (99 голоса(ов))
                                            </span>
                </p>
                <div class="submenuproduct">
                    <p style="padding: 10px; padding-bottom: 0px; font-size: 80%">
                        5 звёзд ----------------- <span style="border: 1px solid #ddd; padding: 5px 10px;">48</span><br><br>
                        5 звёзд ----------------- <span style="border: 1px solid #ddd; padding: 5px 10px;">48</span><br><br>
                        5 звёзд ----------------- <span style="border: 1px solid #ddd; padding: 5px 10px;">48</span><br><br>
                        5 звёзд ----------------- <span style="border: 1px solid #ddd; padding: 5px 10px;">48</span><br><br>
                        5 звёзд ----------------- <span style="border: 1px solid #ddd; padding: 5px 10px;">48</span><br><br>
                    </p>
                </div>
            </div>

            <span>185 заказа(ов)</span>

            <div class="clear"></div>
            <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px;"></div>
            <table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top" style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Цена:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p>
                            <span style="font-size: 130%; color: red;">4 721 000 сум</span> / шт.
                        <div class="menu" style="float: right;">
                            <p>Оптовая цена:</p>
                            <div class="submenuproduct">
                                <p>2% Скидка (3 шт. или больше)</p>
                            </div>
                        </div>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Состояние:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p>
                            <b>Новое</b>
                        </p>

                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Набор:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p class="chek">
                            <input type="radio" name="nabor" value="1" id="nabor1" checked><label for="nabor1">A33 8GB</label>
                            <input type="radio" name="nabor" value="2" id="nabor2"><label for="nabor2">A33 16GB</label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Цвет:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p class="chek">
                            <input type="radio" name="color" value="1" id="color1" checked><label for="color1">Белый</label>
                            <input type="radio" name="color" value="2" id="color2"><label for="color2">Черный</label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="100" valign="top" style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Доставка:</p>
                    </td style="padding-bottom: 15px;">
                    <td style="padding-bottom: 15px;">
                        <p>
                            Бесплатная доставка в <a href="#" class="a">Russian Federation службой China Post Registered Air Mail</a>
                        </p>
                        <p style="color: #999; font-size: 90%">Расчётное время доставки: 15-50 дн. (Отправка в течение 1 рабочих дней)</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="padding-bottom: 15px;">
                        <p style="font-size: 90%">Сервис:</p>
                    </td>
                    <td style="padding-bottom: 15px;">
                        <p class="chek" style="padding-bottom: 10px;">
                            <input type="radio" name="guarantee" value="1" id="guarantee1" checked><label for="guarantee1">Гарантия обмена 1 год</label>
                        </p>
                        <p class="chek">
                            <input type="radio" name="guarantee" value="2" id="guarantee2"><label for="guarantee2">Гарантия ремонта 1 год</label>
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
                    <td style="padding-bottom: 15px;"
                    <p style="font-size: 90%">Общая стоимость:</p>
                    </td>
                    <td>
                        <p style="color: #999; font-size: 90%">
                            Зависит от выбранных характеристик товара
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 10px; padding-bottom: 10px">
                        <a href="#" style="background-color: red; color: #fff; text-decoration: none; padding: 5px 10px; border-radius: 5px; font-size: 120%">Купить сейчас</a>
                        <a href="#" style="background-color: red; color: #fff; text-decoration: none; padding: 5px 10px; border-radius: 5px; font-size: 120%">Добавить в корзину</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p><a href="#" class="a">Добавить в "Мои желания"</a></p>
                    </td>
                </tr>

                <tr>
                    <td style="padding-bottom: 15px;" valign="top">
                        <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px "></div>
                        <p style="font-size: 90%">Возврат<br>товара:</p>
                    </td>
                    <td valign="top" style="padding-bottom: 15px;">
                        <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px"></div>
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
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <img src="images/product/payment/1.png" class="apadding">
                                    <img src="images/product/payment/2.png" class="apadding">
                                    <img src="images/product/payment/3.png" class="apadding">
                                    <img src="images/product/payment/4.png" class="apadding">
                                    <img src="images/product/payment/5.png" class="apadding">
                                </td>
                                <td>
                                    <p style="font-size: 90%">
                                        <a href="#" class="a apadding">Посмотреть ещё</a>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td>
                                    <img src="images/product/cart.png">
                                </td>
                                <td style="padding-left: 10px;" valign="top">
                                    <p style="font-size: 150%">Защита Покупателя</p>
                                    <p style="font-size: 90%"><img src="images/product/check.png" style="margin-right: 10px;"><b>Полный возврат</b> если Вы не получили товар</p>
                                    <p style="font-size: 90%"><img src="images/product/check.png" style="margin-right: 10px;"><b>Возврат платежа</b> при несоответствии описанию</p>
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

    <script type="text/javascript">
        $(function(){
            if ($(window).width() > 401){
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
    <p>Продавец:</p>
    <p><a href="#" class="a"><b>Tablet PC Mall</b></a></p>
    <p>China (Mainland)</p>

    <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px"></div>

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

    <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px"></div>

    <p>Лет работы: <span style="color: red">2</span></p>

    <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px"></div>

    <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td width="50%">
                <a href="#" class="a">Перейти к магазину</a>
            </td>
            <td width="50%">
                <a href="#" class="a">Сохранить</a>
            </td>
        </tr>
    </table>


    <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px"></div>

    <p>Связаться с продавцом</p>
    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>
    <p>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td>
                <img src="images/product/note.png" width="20">
            </td>
            <td>
                <a href="#" class="a">Отправить сообщение</a>
            </td>
        </tr>
    </table>
    </p>

    <div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px"></div>

    <p>Продавец в сети</p>
    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>
    <p>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td>
                <a href="#" class="a">Online</a>
            </td>
        </tr>
    </table>
    </p>

    <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px"></div>

    <p>Товарные категории продавца</p>
    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <div class="leftsub">
        <p><a href="#" class="a">Brand Tablets I</a></p>
        <div class="sub">
            <p><a href="#" class="a">- Onda</a></p>
            <p><a href="#" class="a">- Teclast</a></p>
            <p><a href="#" class="a">- Colorful</a></p>
            <p><a href="#" class="a">- Chuwi</a></p>
            <p><a href="#" class="a">- Cube & Voyo</a></p>
            <p><a href="#" class="a">- Ramos & Huawei</a></p>
            <p><a href="#" class="a">- PiPo & Lenovo</a></p>
            <p><a href="#" class="a">- Ampe & JXD</a></p>
            <p><a href="#" class="a">- Other Tablets</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Brand Tablets II</a></p>
        <div class="sub">
            <p><a href="#" class="a">- Vido</a></p>
            <p><a href="#" class="a">- SANEI</a></p>
            <p><a href="#" class="a">- Iaiwai</a></p>
            <p><a href="#" class="a">- For Kids</a></p>
            <p><a href="#" class="a">- Accessories for Tablet</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">For Moblile Phone</a></p>
        <div class="sub">
            <p><a href="#" class="a">- Phone Cases</a></p>
            <p><a href="#" class="a">- Cable & Charger</a></p>
            <p><a href="#" class="a">- Phone Holder</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Computers & Networking</a></p>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Screen Protector</a></p>
        <div class="sub">
            <p><a href="#" class="a">- Screen Film for iPhone</a></p>
            <p><a href="#" class="a">- Screen Film for Samsung</a></p>
            <p><a href="#" class="a">- Screen Film for Nokia</a></p>
            <p><a href="#" class="a">- Screen Film for Sony</a></p>
            <p><a href="#" class="a">- Screen Film for HTC</a></p>
            <p><a href="#" class="a">- Screen Film for LG</a></p>
            <p><a href="#" class="a">- Screen Film for other cell phone</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Camera Accessories</a></p>
        <div class="sub">
            <p><a href="#" class="a">- Gopro Accessories</a></p>
            <p><a href="#" class="a">- Hot Sale</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Mobile Accessories</a></p>
        <div class="sub">
            <p><a href="#" class="a">- accessories for samsung</a></p>
            <p><a href="#" class="a">- accessories for HTC</a></p>
            <p><a href="#" class="a">- accessories for Nokia</a></p>
            <p><a href="#" class="a">- accessories for iphone</a></p>
            <p><a href="#" class="a">- accessories for Sony</a></p>
            <p><a href="#" class="a">- accessories for LG</a></p>
            <p><a href="#" class="a">- accessories for phone</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Outdoor Gear</a></p>
        <div class="sub">
            <p><a href="#" class="a">- Sports Equipment</a></p>
            <p><a href="#" class="a">- Bycicle Accessories</a></p>
            <p><a href="#" class="a">- LED Light</a></p>
            <p><a href="#" class="a">- In Car</a></p>
            <p><a href="#" class="a">- Home Care</a></p>
            <p><a href="#" class="a">- Repair Tool</a></p>
            <p><a href="#" class="a">- Remote control toys</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Audio & Video</a></p>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Battery for Mobile Phone</a></p>
        <div class="sub">
            <p><a href="#" class="a">- Battery for cell phone</a></p>
        </div>
    </div>

    <div class="leftsub">
        <p><a href="#" class="a">Others</a></p>
    </div>
    <div>
        <p style="float: right;"><a href="#" class="a">Посмотреть ещё</a></p>
    </div>

    <div class="clear"></div>

    <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px"></div>

    <div>
        <p style="text-align: left;">Самые продаваемые товары этого продавца</p>
    </div>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/1.1.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/1.2.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/1.3.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/1.4.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/1.5.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid red; margin-top: 10px; margin-bottom: 10px"></div>

    <div>
        <p style="text-align: left;">Trending Products</p>
    </div>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/2.1.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/2.2.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/2.3.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>

    <div style="border-bottom: 1px solid #ddd; margin-top: 5px; margin-bottom: 5px"></div>

    <a href="#" class="a">
        <div>
            <p style="text-align: center;">
                <img src="images/product/left/2.4.jpg">
            </p>
            <p>Для Samsung Galaxy S 4 мини чехол б...</p>
            <p><span style="color: red; font-size: 120%">25 900 сум</span> / piece</p>
            <p>Recent Orders (1001)</p>
        </div>
    </a>
    </div>

    <div class="contentrt">
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td width="20%">
            <a href="#" class="a">Описание товара</a>
        </td>
        <td width="20%">
            <a href="#" class="a">Отзывы (18)</a>
        </td>
        <td width="20%">
            <a href="#" class="a">Доставка и оплата</a>
        </td>
        <td width="20%">
            <a href="#" class="a">Гарантии продавца</a>
        </td>
        <td width="20%">
            <p style="text-align: right; font-size: 85%"><a href="#" class="a">Report item</a></p>
        </td>
    </tr>
</table>

<div class="clear"></div>
<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px"></div>

<div>
    <p style="background-color: #eee; padding: 5px 10px">
        Характеристики товара
    </p>
</div>

<div style="padding-top: 10px">
<table cellspacing="0" cellpadding="0" width="100%" style="font-size: 85%">
    <tr>
        <td width="50%" valign="top">
            <p style="padding-bottom: 5px">
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
        </td>

        <td width="50%" valign="top">
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
            </p>
        </td>
    </tr>
</table>

<div class="clear"></div>
<div style="margin-top: 10px"></div>
<div>
    <p style="background-color: #eee; padding: 5px 10px">
        Описание товара
    </p>
</div>

<div style="margin-top: 10px">
    <span style="color: #fff; background-color: red; padding: 0px 5px;">Description</span> Описание
</div>

<div style="border-bottom: 2px dotted #ddd"></div>

<div style="font-size: 85%; color: #888">
    <p style="padding-bottom: 5px; padding-top: 5px;">
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
    </p>
</div>

<div>
    <p style="color: red;">О HSD-007</p>
    <p style="font-size: 85%">
        1. 10 дюймов 1024x600 пикселей<br>
        2. 3 г телефон вызова, слоты Две сим-карты<br>
        3. 2 ГБ RAM + 16 ГБ ROM, поддержка карты памяти до 32 ГБ.<br>
        4. 3 мегапиксельная камера заднего вида + 1.3 мегапиксельная фронтальная камера<br>
        5. Поддержка Wi-Fi, GPS, OTG, FM, BT функции
    </p>
</div>

<div style="margin-top: 15px;"></div>

<div>
    <p style="font-size: 85%">
        Примечание: Этот прибор предназначен только для работы с текущей установленной операционной системой Android. Любые изменения, такие как обновление или мигающий новой версии приведет к аннулированию гарантии.
    </p>
</div>

<table border="1" cellpadding="2" cellspacing="0" width="100%" style="font-size: 80%; border-color: #ddd">
<tr>
    <td colspan="2" bgcolor="#eee">
        Общие
    </td>
</tr>
<tr>
    <td width="50%">
        Процессор
    </td>
    <td width="50%">
        MT6582
    </td>
</tr>
<tr>
    <td>
        OS
    </td>
    <td>
        Android 4.4
    </td>
</tr>
<tr>
    <td>
        Оперативной памяти
    </td>
    <td>
        2 ГБ
    </td>
</tr>
<tr>
    <td>
        ROM
    </td>
    <td>
        16 ГБ
    </td>
</tr>
<tr>
    <td>
        Внешняя память
    </td>
    <td>
        TF карты до 32 ГБ (не включены)
    </td>
</tr>
<tr>
    <td>
        Сенсорный экран типов
    </td>
    <td>
        Емкостный экран
    </td>
</tr>
<tr>
    <td>
        Разрешение дисплея
    </td>
    <td>
        1024x600
    </td>
</tr>
<tr>
    <td>
        Сети связи
    </td>
    <td>
        Встроенный 3 г, Bluetooth-гарнитура, Wi-Fi
    </td>
</tr>
<tr>
    <td>
        Интерфейсы
    </td>
    <td>
        2 x слота для SIM карты<br>
        1 x слот для карт TF<br>
        1 x микро USB V2.0<br>
        1x3.5 мм наушники порт
        1 X DC порт
    </td>
</tr>
<tr>
    <td>
        Поддержка языков
    </td>
    <td>
        Французский, Немецкий, Итальянский, Португальский, Русский, Испанский, Турецкий, Арабский, Индонезийский, Чешский, Датский, Голландский, Филиппинский, Греческий, Венгерский, Иврит, Японский, Норвежский, Bahasa Melayu, Тайский, Вьетнамский
    </td>
</tr>
<tr>
    <td>
        Дополнительные функции
    </td>
    <td>
        G-датчик, GPS, OTG, FM-радио, телефонной вызова
    </td>
</tr>
<tr>
    <td colspan="2" bgcolor="#eee">
        Сети
    </td>
</tr>
<tr>
    <td>
        Типы сетей
    </td>
    <td>
        WCDMA, GSM
    </td>
</tr>
<tr>
    <td>
        Частота
    </td>
    <td>
        WCDMA 2100 мГц, группа (2 г): GSM 850/900/1800/1900 мГц
    </td>
</tr>
<tr>
    <td>
        Wi-Fi
    </td>
    <td>
        802.11b, 802.11 г, 802.11n
    </td>
</tr>
<tr>
    <td>
        Bluetooth
    </td>
    <td>
        Поддержка
    </td>
</tr>
<tr>
    <td colspan="2" bgcolor="#eee">
        Камеры
    </td>
</tr>
<tr>
    <td>
        Типы камер
    </td>
    <td>
        Двойной
    </td>
</tr>
<tr>
    <td>
        Камеры заднего вида
    </td>
    <td>
        3.0MP
    </td>
</tr>
<tr>
    <td>
        Фронтальная камера
    </td>
    <td>
        1,3-мегапиксельная
    </td>
</tr>
<tr>
    <td colspan="2" bgcolor="#eee">
        Аккумулятор
    </td>
</tr>
<tr>
    <td>
        Типов
    </td>
    <td>
        Номера-Съемный литий-полимерный
    </td>
</tr>
<tr>
    <td>
        Емкость
    </td>
    <td>
        5000 мАч
    </td>
</tr>
<tr>
    <td colspan="2" bgcolor="#eee">
        Размеры
    </td>
</tr>
<tr>
    <td>
        Размер
    </td>
    <td>
        240*150*10 мм
    </td>
</tr>
<tr>
    <td>
        Вес
    </td>
    <td>
        500 г
    </td>
</tr>
<tr>
    <td colspan="2" bgcolor="#eee">
        Пакет включает
    </td>
</tr>
<tr>
    <td>
        Пакет Содержание
    </td>
    <td>
        1 х планшетный ПК<br>
        1 X Кабель для передачи данных<br>
        1 X OTG кабель<br>
        1 x зарядное устройство
    </td>
</tr>
</table>

</div>

<div style="margin-top: 10px">
    <span style="color: #fff; background-color: red; padding: 0px 5px;">Shipping</span> Доставка
</div>

<div style="border-bottom: 2px dotted #ddd"></div>

<div style="font-size: 85%; margin-top: 20px; margin-bottom: 20px;">
    <p>
        1.	Все детали будут отправлены в течение обещанного Дата. Мы будем информировать вас по электронной почте, если есть любая задержка.
    </p>
    <p>
        2.	Пожалуйста, проверьте ваш адрес в Aliexpress, номер телефона важно, когда есть что-то срочное.
    </p>
</div>

<div style="margin-top: 10px">
    <span style="color: #fff; background-color: red; padding: 0px 5px;">Warranty</span> Гарантия
</div>

<div style="border-bottom: 2px dotted #ddd"></div>

<div style="font-size: 85%; margin-top: 20px; margin-bottom: 20px;">
    <p>
        1.	Мы не несем ответственности за задержки, вызванные таможенных пошлин, налогов и иных таможенных платежей.
    </p>
    <p>
        2.	Пожалуйста, предоставьте доказательства видео в течение 5 дней после его получения, если есть проблема качества, Проблемы будут решены возврат или замена.
    </p>
    <p>
        3.	Пожалуйста сообщите нам в течение 2 дней после получения не тот товар. Мы можем предложить скидку, замена или возврат после подтверждения.
    </p>
    <p>
        4.	Мы предоставляем бесплатное техническое обслуживание в течение 6 месяцев.
    </p>
    <p>
        5.	Продвижение продукции только предлагаем замену и техническое обслуживание услуги возврат не принимаются (за исключением неправильные продукты.)
    </p>
</div>

<div style="margin-top: 10px">
    <span style="color: #fff; background-color: red; padding: 0px 5px;">Feedback</span> Обратная связь
</div>

<div style="border-bottom: 2px dotted #ddd"></div>

<div style="font-size: 85%; margin-top: 20px; margin-bottom: 20px;">
    <p>
        1.	Если вы удовлетворяетесь с нашими продуктами и услугами, положительный отзыв будет высоко ценится.
    </p>
    <p>
        2.	Если по какой-либо причине, Вы не удовлетворены вашей покупкой, Пожалуйста, свяжитесь с нами перед отъездом любой отрицательный или нейтральный отзыв, Мы постараемся сделать все, чтобы помочь вам.
    </p>
    <p>
        3.	Мы будем работать с вами, пока вы удовлетворены. Мы считаем, что дружеское общение может решить все проблемы.
    </p>
</div>

<div style="margin-top: 10px">
    <span style="color: #fff; background-color: red; padding: 0px 5px;">FAQ</span> часто задаваемые вопросы
</div>

<div style="border-bottom: 2px dotted #ddd"></div>

<div style="font-size: 85%; margin-top: 20px; margin-bottom: 20px;">
    <p>
        1.	Более часто задаваемые вопросы и ответы об таблетки.
    </p>
    <p>
        2.	Может быть, вы есть некоторые проблемы с планшетом, Но это не сломан или поврежден, Вам просто нужно делать некоторые простые шаги.
    </p>
</div>

<div style="margin-top: 10px">
    <span style="color: #fff; background-color: red; padding: 0px 5px;">About US</span> О нас
</div>

<div style="border-bottom: 2px dotted #ddd"></div>

<div style="font-size: 85%; margin-top: 20px;">
    <p>
        1.	Более часто задаваемые вопросы и ответы об таблетки.
    </p>
    <p>
        2.	Может быть, вы есть некоторые проблемы с планшетом, Но это не сломан или поврежден, Вам просто нужно делать некоторые простые шаги.
    </p>
</div>
</div>

</div>
