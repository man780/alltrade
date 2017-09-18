<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 6/28/16
 * Time: 3:32 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="philips-rating">
    <div style="float: left">
        Магазин: <b><?=$company->name;?></b>
    </div>
    <div style="margin-left: 20px; float: left">
        Рейтинг:
    </div>

    <div style="float: left; margin-left:10px;">
        <div id="ratingBar">
            <div id="rating">
                <div id="ratZero"></div>
                <div id="ratDone"></div>
                <div id="ratHover"></div>
            </div>
            <div id="ratBlocks"></div>
            <div id="ratStat"></div>
        </div>
    </div>
    <div style="margin-left: 20px; float: left;">
        Адрес: <b><?=$company->address?></b>
    </div>
    <div style="margin-left: 20px; float: left;">
        Телефон: <b>+<?=$company->phone;?></b>
    </div>
    <div style="margin-left: 20px; float: left;">
        <div class="elect">Подписаться в магазин</div>
    </div>
</div>

<div class="clear"></div>


<div class="philipscontainer">

    <div class="philipsmenu">
        <ul>
            <li>Главная</li>
            <li>
                <span>Товары</span><div class="philips-sub"><div class="line"></div><div class="line"></div><div class="line"></div></div>
                <ul class="philipsmenusub">
                    <li>Beauty & Health</li>
                    <li>Kitchen Appliances</li>
                    <li>Home Appliances</li>
                    <li>Portable Electronics</li>
                </ul>
            </li>
            <li>Акции</li>
            <li>Лидеры продаж</li>
            <li>Новинки</li>
            <li>Отзывы</li>
            <li>Контакты</li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        var topPos = $('.philipscontainer').offset().top;
        $(window).scroll(function() {
            var top = $(document).scrollTop();

            if (top > topPos) {
                $('.philipscontainer').addClass('fixed');
            }
            else {
                $('.philipscontainer').removeClass('fixed');
            }
        });
    });
</script>

<div class="clear"></div>


<div id="container">

<div id="header">

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
                    <a href="#" class="a apadding">Молл.Доставка из Узбекистана</a>
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
        <div id="leftmenu">
            <ul style="margin: 0; padding: 0;">

                <div class="registration">
                    <p style="float: right;"><span><a href="#" class="a">Войти</a></span> | <span><a href="#" class="a">Регистрация</a></span></p>
                    <div class="clear"></div>
                    <div style="margin-top: 10px;">
                        <a href="/">
                            <div style="float: left;">
                                <div class="registrationa">
                                    <img src="<?=$layoutPath?>/images/header/sidebar/home.png" width="20">
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div style="float: left;">
                                <div class="registrationa">
                                    <img src="<?=$layoutPath?>/images/header/sidebar/cart.png" width="20">
                                </div>
                            </div>
                            <p class="son">99</p>
                        </a>
                    </div>
                </div>

                <?foreach($categories as $category):?>
                <?if($category['id_parent'] == 0):?>
                <li>

                    <p class="category26"><a href="#" class="ared"><?=$category['name']?></a></p>
                    <ul class="leftmenusub">
                        <?foreach($categories as $category2):?>
                        <?if($category2['id_parent'] == $category['id']):?>
                        <li><a href="<?=$category2['id']?>"><?=$category2['name'];?></a></li>
                        <?endif;?>
                        <?endforeach;?>
                    </ul>
                </li>
                <?endif;?>
                <?endforeach;?>

            </ul>
        </div>
    </div>
</div>

<div class="topslider" style="max-width: 80%;">
    <div class="flex-container">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <a href="#"><img src="slide/img/slide1.jpg" /></a>
                </li>

                <li>
                    <img src="slide/img/slide2.jpg"/>
                </li>

                <li>
                    <img src="slide/img/slide3.jpg"/>
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
<!--<div class="bannerright">
    <img src="/images/banner/1.jpg" class="bannerrightimg"><img src="/images/banner/2.jpg" class="bannerrightimg">
</div>-->




<div class="clear"></div>

<!--<p class="bannerbottom"><img src="/images/banner/1.2.jpg"></p>-->
</div>

<div id="topbottom">
    <div class="topbottomdiv">
        <a href="#" class="a">
            <table cellspacing="0" cellpadding="0">
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
            <table cellspacing="0" cellpadding="0">
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
            <table cellspacing="0" cellpadding="0">
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
            <table cellspacing="0" cellpadding="0">
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
<div id="brands">
<div class="brandstop">
    <h2 style="padding: 0; margin: 0; float: left; margin-left: 10px; margin-top: 10px; color: red; font-size: 130%;">ХИТЫ ПРОДАЖ</h2>
    <p class="brandsp" ><a href="#" style="color: red; text-decoration: none;"></a></p>
    <table class="barandstoptable" cellpadding="0" cellspacing="0">
        <tr>
            <td><a href="#"><img src="<?=$layoutPath?>/images/brands/1.png" width="30"></a></td>
            <td style="padding-right: 20px; padding-left: 10px"><a href="#" class="a">Реальные<br>бренды</a></td>
            <td><a href="#"><img src="<?=$layoutPath?>/images/brands/2.png" width="30"></a></td>
            <td style="padding-right: 20px; padding-left: 10px"><a href="#" class="a">Экспресс<br>доставка</a></td>
            <td><a href="#"><img src="<?=$layoutPath?>/images/brands/3.png" width="30"></a></td>
            <td style="padding-left: 10px"><a href="#" class="a">Удобный<br>возврат</a></td>
        </tr>
    </table>
</div>

<div class="clear"></div>
<div style="border-bottom: 1px solid red; padding-top: 15px; margin-bottom: 15px;"></div>

<ul style="margin: 0; padding: 0;">

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/2.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/3.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/4.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>


<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/5.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/6.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>


<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/7.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/8.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/9.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/10.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/3.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/4.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="hit">
            <img src="images/hit.png">
        </div>
    </li>
</a>



</ul>



<div class="clear"></div>
<div style="border-bottom: 1px solid #ddd; margin-top: 15px;"></div>

</div>


<div class="pro-container">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="text-align: center; color: #fff; padding: 15px 0;">ТОВАРЫ С АКЦИИ</h2>
        <section class="regular slider">
            <div>
                <a href="#"><img src="images/product-slide/1.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/2.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/3.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/4.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/5.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/6.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/7.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/1.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/2.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/3.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/4.jpg"></a>
            </div>
            <div>
                <a href="#"><img src="images/product-slide/5.jpg"></a>
            </div>
        </section>

        <!--<script type="text/javascript" src="slick/slick.js" charset="utf-8"></script>-->
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



<div id="brands">
<div class="brandstop">
    <h2 style="padding: 0; margin: 0; float: left; margin-left: 10px; margin-top: 10px; color: red; font-size: 130%;">НОВЫЕ ПОСТУПЛЕНИЯ</h2>
</div>

<div class="clear"></div>
<div style="border-bottom: 1px solid red; padding-top: 15px; margin-bottom: 15px;"></div>

<ul style="margin: 0; padding: 0;">

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/1.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/2.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/3.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/4.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/1.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/2.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/3.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/4.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>
<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/1.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/2.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/3.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>

<a href="#" class="a">
    <li class="tovareuro">
        <p style="text-align: center;"><img class="qualityMarkimgeuro" src="images/1/4.jpg"></p>
        <div style="padding-left: 10px; padding-right: 10px;">
            <table width="100%" style="margin-top: 15px;">
                <tr>
                    <td colspan="2"><p style="font-size: 120%; text-align: center;">Name</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 120%">US $3.00</p></td>
                    <td>
                        <div style="float: right;">
                            <a href="#" class="qualityMarklink">Купить</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </li>
</a>
</ul>
<div class="clear"></div>
<div style="border-bottom: 1px solid #ddd; margin-top: 15px;"></div>
</div>
</div>
<?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
</div>