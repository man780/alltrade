<?
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\Json;
use frontend\models\Elect;
$ip_user = $_SERVER['REMOTE_ADDR'];
$electCount = Elect::find()->where(['ip_user' => $ip_user])->count();
?>
<div id="containertop">
	<div class="containertopdiv">
		<div id="topheader">
			<div class="advert">
				<a href="<?=Url::toRoute('/ads/create')?>" style="text-decoration: none;">
					<div style="border-radius: 20px; background: #4caf50; color: #fff;padding: 3px 5px;">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<img src="<?=$layoutPath?>/images/header/plus.png" style="width: 15px; margin-top: 5px; margin-right: 10px;">
								</td>
								<td>
									Добавить обявление
								</td>
							</tr>
						</table>
					</div>
				</a>
			</div>
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
            <a href="/"><img src="<?=$layoutPath?>/images/logo.png" /></a>
        </div>

        <div class="search">
            <form action="#" method="GET">
                <input type="text" name="q" placeholder="Поиск" class="searchname">

                <input type="submit" class="search-button" value="">
            </form>
        </div>

        <div class="cartreglog">
            <a href="<?=Url::toRoute('/elect/index');?>" style="text-decoration: none;" class="a">
                <div class="cart">
                    <div style="float: left; margin-right: 10px;"><img src="/images/star.png" class="cartico"></div>
                    <div style="float: left; margin-right: 20px;">
                        <p class="count elect"><?=$electCount?></p>
                        <p class="cartp">Избранные</p>
                    </div>
                </div>
            </a>
            <div style="float: right;" class="login">
                <a href="<?=Url::toRoute('/ads/create')?>" style="text-decoration: none;">
                    <div style="border-radius: 20px; background: #4caf50; color: #fff; padding: 5px 12px; font-size: 120%">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <img src="<?=$layoutPath?>/images/header/plus.png" style="width: 20px; margin-top: 5px; margin-right: 10px;">
                                </td>
                                <td>
                                    Добавить обявление
                                </td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
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
                <a href="<?=Url::toRoute('/elect/index');?>" style="text-decoration: none;" class="a">
                    <div class="cart">
                        <div style="float: left; margin-right: 10px;"><img src="/images/star.png" class="cartico"></div>
                        <div style="float: left; margin-right: 20px;">
                            <p class="count elect"><?=$electCount?></p>
                            <p class="cartp">Избранные</p>
                        </div>
                    </div>
                </a>
                <div style="float: right;" class="login">
                    <a href="<?=Url::toRoute('/ads/create')?>" style="text-decoration: none;">
                        <div style="border-radius: 20px; background: #4caf50; color: #fff; padding: 5px 12px; font-size: 120%">
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <img src="<?=$layoutPath?>/images/header/plus.png" style="width: 20px; margin-top: 5px; margin-right: 10px;">
                                    </td>
                                    <td>
                                        Добавить обявление
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </div>
            </div>
        </div>

		<div class="clear"></div>
		
		<div style="border-bottom: 1px solid #ddd; margin-top: 15px;"></div>
	</div>
</div>