<?
use frontend\widgets\category\Category1Widget;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\YiiAsset;
use frontend\models\Desired;
use frontend\models\Cart;

$userID = \Yii::$app->user->id;
$cartCount = Cart::find()->where(['id_user' => $userID])->count();


$ip_user = $_SERVER['REMOTE_ADDR'];
$desiredCount = Desired::find()->where(['ip_user' => $ip_user])->count();
?>
<div id="containertop">
    <div class="containertopdiv">
        <div id="topheader">
            <div class="topheadermenumini">
                <div class="menuheader" onclick="topmenu('.menuheadersub-800')">
                    <span>Меню</span>
                </div>
                <div class="menuheadersub-800">
                    <ul>
                        <a href="/eshop/">
                            <li>
                                Интернет Магазины
                            </li>
                        </a>
                        <a href="/">
                            <li>
                                Доска объявлений
                            </li>
                        </a>
                        <a href="/services/">
                            <li>
                                Услуги
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="menuheadersub">
                    <p style="float: left; margin-left: 10px;"><span style="margin-right: 0px;"><a href="/eshop/" class="a" style="color: red">Интернет Магазины |</a></span><span style="margin-right: 0px;"><a href="/" class="a" style="color: red"> Доска объявлений |</a></span><span style="margin-right: 30px;"><a href="/services/" class="a" style="color: red"> Услуги</a></span></p>
                </div>
            </div>
            <?if(Yii::$app->user->isGuest):?>
            <div id="topheadermenu">
                <table>
                    <tr>
                        <td style="padding-right: 10px;">
                            <span><img src="<?=$layoutPath?>/images/login/user.png" width="25"></span>
                        </td>
                        <td>
                            <a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a> |
                        </td>
                        <td style="padding-right: 10px;">
                            <span><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></span>
                        </td>
                    </tr>
                </table>
            </div>
            <?else:?>
                <div class="topheadermenu-avto">
                    <table>
                        <tr>
                            <td style="padding-right: 10px;">
                                <a href="#"><span><img src="<?=$layoutPath?>/images/login/user-plus.png" width="25" class="login-img"></span></a>
                            </td>
                            <td>
                                <p class="login"><?=Yii::$app->user->identity->username?></p>
                                <ul class="profile-submenu">
                                    <li>
                                        <a href="#" class="a moy-alltrade">Мои заказы</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute('/cart/index');?>" class="a moya-korzina">Моя корзина</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute('/users/ads');?>" class="a moi-obyavlenie">Мои объявление</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute('/elect/index');?>" class="a izb-obyavleniya">Избранные объявление</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute('/eshop/favorite');?>" class="a lyubimie-mag">Любимые магазины</a>
                                    </li>
                                    <li>
                                        <a href="#" class="a lyubimie-usl">Любимые услуги</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute('/users/messages');?>" class="a moi-soobshenie">Мои сообщение</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute('/cart/desired');?>" class="a moi-jelaniya">Желаемые</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute('/users/settings');?>" class="a nastroyki">Настройки</a>
                                    </li>
                                    <div style="border-bottom: 1px solid #ddd; margin: 5px 0;"></div>
                                    <li>
                                        <b>
                                            <?
                                            echo Html::a('Выйти', Url::toRoute('/user/logout'), [
                                                'class' => 'a viyti',
                                                'data' => [
                                                    //'confirm' => "Are you sure you want to delete profile?",
                                                    'method' => 'POST',
                                                ],
                                            ]);
                                            ?>
                                        </b>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            <?endif;?>
            <div class="clear"></div>

        </div>


        <div class="clear"></div>
        <div class="logotop">

            <div class="menucategoryleft"><img src="<?=$layoutPath?>/images/menu.png" style="width: 40px; margin-top: -8px"></div>
            <div style="float: left;"><a href="/"><img src="<?=$layoutPath?>/images/logo.png" /></a></div>
            <div class="menu" style="float: left; width: 50px;">
                <img class="categorymenu" style="margin-left: 10px;width: 40px; position: relative;"	src="<?=$layoutPath?>/images/product/menu.png" />
                <div class="submenu">
                    <?=Category1Widget::widget(['id_menu' => 2]);?>
                </div>
            </div>
        </div>


        <div class="searchcat">
            <form action="#" method="GET">
                <input type="text" name="q" placeholder="Поиск" class="searchname">

                <input type="submit" class="search-button" value="">
            </form>
        </div>

        <div class="cartreglog">
            <a href="<?=Url::toRoute('/cart/index');?>" style="text-decoration: none;" class="a">
                <div class="cart">
                    <div style="float: left; margin-right: 10px;"><img src="<?=$layoutPath?>/images/cart.png" class="cartico"></div>
                    <div style="float: left; margin-right: 20px;">
                        <p class="count catrgoods"><?=$cartCount?></p>
                        <p class="cartp">Корзина</p>
                    </div>
                </div>
            </a>
            <a href="<?=Url::toRoute('/cart/desired');?>" style="text-decoration: none;" class="a">
                <div class="cart1">
                    <div style="float: left; margin-right: 10px;"><img src="<?=$layoutPath?>/images/heart.png" class="cartico1"></div>
                    <div style="float: left; margin-right: 20px;">
                        <p class="count desired-goods"><?=$desiredCount?></p>
                        <p class="cartp">Желаемые</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="logotopsearchcatreglog">
            <div class="clear"></div>
            <div class="logotop">   
                <div class="menucategoryleft"><img src="<?=$layoutPath?>/images/menu.png" style="width: 40px; margin-top: -8px"></div>
                <a href="/"><img src="<?=$layoutPath?>/images/logo.png" /></a>
            </div>

            <div class="search">
                <form action="#" method="GET">
                    <input type="text" name="q" placeholder="Поиск" class="searchname">

                    <input type="submit" class="search-button" value="">
                </form>
            </div>
            <div class="cartreglog">
                <a href="<?=Url::toRoute('/cart/index');?>" style="text-decoration: none;" class="a">
                    <div class="cart">
                        <div style="float: left; margin-right: 10px;"><img src="<?=$layoutPath?>/images/cart.png" class="cartico"></div>
                        <div style="float: left; margin-right: 20px;">
                            <p class="count catrgoods"><?=$cartCount?></p>
                            <p class="cartp">Корзина</p>
                        </div>
                    </div>
                </a>
                <a href="#" style="text-decoration: none;" class="a">
                    <div class="cart1">
                        <div style="float: left; margin-right: 10px;"><img src="<?=$layoutPath?>/images/heart.png" class="cartico1"></div>
                        <div style="float: left; margin-right: 20px;">
                            <p class="cartp">Мои<br>желания</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="clear"></div>
        <div style="margin-top: 15px;"></div>
    </div>
</div>