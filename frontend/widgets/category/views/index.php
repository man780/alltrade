<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 5/26/16
 * Time: 9:01 PM
 * To change this template use File | Settings | File Templates.
 */
use frontend\widgets\category\CategoryWidget;
use yii\helpers\Url;
use yii\helpers\Html;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
$bottomCat2 = $categories['categories'];
?>
<div id="leftmenu">
    <div class="leftmenu-inner">
        <?if(Yii::$app->user->isGuest):?>
        <div id="topheadermenu-800">
            <table>
                <tr>
                    <td style="padding-right: 10px;">
                        <span><img src="<?=$layoutPath?>/images/login/user.png" class="topheadermenu-800-img"></span>
                    </td>
                    <td>
                        <a href="<?=Url::toRoute('/user/login')?>" class="aa">Войти</a> |
                    </td>
                    <td style="padding-right: 10px;">
                        <span><a href="<?=Url::toRoute('/user/register')?>" class="aa">Регистрация</a></span>
                    </td>
                </tr>
            </table>
        </div>
        <?else:?>
            <div class="topheadermenu-avto-800">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="padding-right: 10px; width: 30px;">
                            <a href="#"><span><img src="<?=$layoutPath?>/images/login/user-plus.png" class="login-img"></span></a>
                        </td>
                        <td>
                            <p class="login1 login-up"><?=Yii::$app->user->identity->username?></p>
                        </td>
                    </tr>
                </table>
                <ul class="profile-submenu">
                    <li>
                        <a href="#" class="aa moy-alltrade">Мои заказы</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute('/cart/index');?>" class="aa moya-korzina1">Моя корзина</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute('/users/ads');?>" class="aa moi-obyavlenie1">Мои объявление</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute('/elect/index');?>" class="aa izb-obyavleniya1">Избранные объявление</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute('/eshop/favorite');?>" class="aa lyubimie-mag1">Любимые магазины</a>
                    </li>
                    <li>
                        <a href="#" class="aa lyubimie-usl1">Любимые услуги</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute('/users/messages');?>" class="aa moi-soobshenie1">Мои сообщение</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute('/cart/desired');?>" class="aa moi-jelaniya1">Желаемые</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute('/users/settings');?>" class="aa nastroyki1">Настройки</a>
                    </li>
                    <div style="border-bottom: 1px solid #ddd; margin: 5px 0;"></div>
                    <li>
                        <b>
                            <?
                            echo Html::a('Выйти', Url::toRoute('/user/logout'), [
                                'class' => 'aa viyti',
                                'data' => [
                                    //'confirm' => "Are you sure you want to delete profile?",
                                    'method' => 'POST',
                                ],
                            ]);
                            ?>
                        </b>
                    </li>
                </ul>
            </div>
        <?endif;?>
        <div class="menu-categories">
            <b>Категории</b>
            <div class="menu-categories-nazad">
                Назад
            </div>
        </div>
        <ul style="margin: 0; padding: 0; padding-left: 10px;">
            <?$i=1;?>
            <?//vd($categories['categories']);?>
            <?foreach($categories['parentCat'] as $key => $category):?>

            <?$bottomCat = $categories['bottomCat'][$key];?>
            <li>
                <p class="category<?=$i;?> category-<?=$category['id']?>">
                    <?=$category['name']?></p>            
                <?
                $i++;
                if($bottomCat == null)continue;
                ?>
                <ul class="leftmenusub">
                    <div class="abc123">
                        <?foreach($bottomCat as $k => $cat):?>
                        <div class="submenu">
                            <div class="sub123">
                                <li>
                                    <a href="<?=Url::toRoute(['/category/view/', 'id' => $cat['id']]);?>"><?=$cat['name']?></a>
                                    <ul class="leftmenusubinner">
                                        <?//$bottomCat2 = $bottomCat['bottomCat'][$key];?>
                                        <?if($bottomCat2)?>
                                        <?foreach($bottomCat2 as $bCat2):?>
                                            <?if($bCat2['id_parent'] == $cat['id']):?>
                                            <li>
                                                <a href="<?=Url::toRoute(['/category/view/', 'id' => $bCat2['id']]);?>"><?=$bCat2['name']?></a>
                                            </li>
                                            <?endif;?>
                                    <?endforeach;?>
                                    </ul> 
                                </li>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </ul>
            </li>
            <?endforeach;?>
        </ul>
    </div>
    <div class="leftmenu-inner-bg"></div>
</div>

<div id="leftmenu-isotope">
    <ul style="margin: 0; padding: 0; padding-left: 10px;">
        <div class="registration">
            <table>
                <tr>
                    <td>
                        <span><img src="<?=$layoutPath?>/images/login/man.png" style="margin: 0; padding: 0; width: 30px;"></span>
                    </td>
                    <td>
                        <span style="padding-bottom: 15px;"><a href="#" class="a">Войти</a> | </span>
                    </td>
                    <td>
                        <span><a href="#" class="a">Регистрация</a></span>
                    </td>
                </tr>
            </table>
        </div>
        <?$i=1;?>
        <?//vd($categories['categories']);?>
        <?foreach($categories['parentCat'] as $key => $category):?>

        <?$bottomCat = $categories['bottomCat'][$key];?>
        <li>
            <p class="category<?=$i;?> category-<?=$category['id']?>">
                <?=$category['name']?></p>            
            <?
            $i++;
            if($bottomCat == null)continue;
            ?>
            <ul class="leftmenusub">
                <div class="abc123">
                    <?foreach($bottomCat as $k => $cat):?>
                    <div class="submenu">
                        <div class="sub123">
                            <li>
                                <a href="<?=Url::toRoute(['/category/view/', 'id' => $cat['id']]);?>"><?=$cat['name']?></a>
                                <ul class="leftmenusubinner">
                                    <?//$bottomCat2 = $bottomCat['bottomCat'][$key];?>
                                    <?if($bottomCat2)?>
                                    <?foreach($bottomCat2 as $bCat2):?>
                                        <?if($bCat2['id_parent'] == $cat['id']):?>
                                        <li>
                                            <a href="<?=Url::toRoute(['/category/view/', 'id' => $bCat2['id']]);?>"><?=$bCat2['name']?></a>
                                        </li>
                                        <?endif;?>
                                <?endforeach;?>
                                </ul> 
                            </li>
                        </div>
                    </div>
                    <?endforeach;?>
                </div>
            </ul>
        </li>
        <?endforeach;?>
    </ul>
</div>
<!-- 
<script type="text/javascript">
    $(function() {
        $('#leftmenu-isotope').css('display', 'block');
        $('.leftmenusub').css('display', 'block');
        $('.abc123').isotope({
            itemSelector: '.submenu'
        });
        $('.leftmenusub').css('display', 'none');
        $('#leftmenu-isotope').css('display', 'none');
    });
</script> -->