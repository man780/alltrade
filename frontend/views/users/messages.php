<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/23/16
 * Time: 6:09 PM
 * To change this template use File | Settings | File Templates.
 */
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
?>
<h1 style="margin: 0; font-size: 120%;" class="profile-header-h1">
    Сообщения
</h1>
<p style="font-size: 90%; color: #999;" class="profile-header-p">Здесь вы найдёте ответы на свои объявления, а также отосланные вами сообщения</p>
<div style="margin-top: 10px;"></div>
<div class="clear"></div>
<div style="margin: 10px 0; border-bottom: 1px solid #ddd;"></div>

<div class="profile-message">
    <div class="profile-menu-sub">
        <span style="padding: 5px; border-right: 1px solid #ddd; cursor: pointer;"  class="profile-these-h1">Полученные</span>
        <span style="padding: 5px; cursor: pointer" class="profile-sent-h1">Отправленные</span>
    </div>
    <div style="margin: 10px 0; border-bottom: 1px solid #ddd;"></div>
    <div class="profile-inbox">
        <h1 style="margin: 0; font-size: 120%; color: #555">Входящие сообщения</h1>
        <div class="profile-ads">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
                        Пользователь
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd" width="80%">
                        Объявление
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
                        Дата
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <table>
                            <tr>
                                <td>
                                    <a href="#"><img src="<?=$layoutPath?>/images/profile/2.png" width="20" style="margin-right: 10px;"></a>
                                </td>
                                <td>
                                    1505025
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <a href="" class="a">
                            <p>Php программист <sup>#2</sup></p>
                            <p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
                        </a>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <p>1 май, 18:56</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <table>
                            <tr>
                                <td>
                                    <a href="#"><img src="<?=$layoutPath?>/images/profile/2.png" width="20" style="margin-right: 10px;"></a>
                                </td>
                                <td>
                                    1505025
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <a href="" class="a">
                            <p>Php программист <sup>#2</sup></p>
                            <p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
                        </a>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <p>1 май, 18:56</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="profile-outbox">
        <h1 style="margin: 0; font-size: 120%; color: #555">Исходящие сообщения</h1>
        <div class="profile-ads">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
                        Пользователь
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd" width="80%">
                        Объявление
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
                        Дата
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <table>
                            <tr>
                                <td>
                                    <a href="#"><img src="<?=$layoutPath?>/images/profile/2.png" width="20" style="margin-right: 10px;"></a>
                                </td>
                                <td>
                                    1505025
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <a href="" class="a">
                            <p>Исходящие Php программист <sup>#2</sup></p>
                            <p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
                        </a>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <p>1 май, 18:56</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <table>
                            <tr>
                                <td>
                                    <a href="#"><img src="<?=$layoutPath?>/images/profile/2.png" width="20" style="margin-right: 10px;"></a>
                                </td>
                                <td>
                                    1505025
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <a href="" class="a">
                            <p>Исходящие Php программист <sup>#2</sup></p>
                            <p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
                        </a>
                    </td>
                    <td style="padding: 5px; border-bottom: 1px solid #ddd">
                        <p>1 май, 18:56</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>