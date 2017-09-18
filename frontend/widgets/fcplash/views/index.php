<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/10/15
 * Time: 2:29 PM
 * To change this template use File | Settings | File Templates.
 */
use frontend\widgets\teamPopup\TeamPopupWidget;
use frontend\widgets\userPopup\UserPopupWidget;
?>

<div class="fcPlash" style="z-index:99;">
    <div class="centrirovaniefc">
        <div class="fcZag">
            <h3>Истинный фанат клуба:</h3>
            <div class="Fcright">
                <a href="javascript:void(0)"></a>
                <div class="hint">Изменить<b></b></div>
            </div>
            <div class="fcClubWind" style="z-index:6">
                <?= TeamPopupWidget::widget(['is_club' => true, 'id_team' => $user_data['fan_club'], 'layoutPath' => $layoutPath,])?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="fcZag aLink">
            <h3>Болею за клубы:</h3>
            <?foreach($user_data['root_for_clubs'] as $key => $club){?>
            <div class="fcClubWind" style="z-index:<?=(count($user_data['root_for_clubs'])-$key)?>;">
                <?=TeamPopupWidget::widget(['is_club' => true, 'id_team' => $club, 'layoutPath' => $layoutPath,])?>
            </div>
            <?}?>
            <div class="endFc">
                <a href="javascript:void(0)" class="fcMore">еще</a>
                <div class="Fcright FcrightinendFc"><a href="javascript:void(0)"></a><div class="hint">Добавить<b></b></div></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="fcZag">
            <h3>Болею за сборную:</h3>
            <div class="Fcright"><a href="javascript:void(0)"></a><div class="hint">Изменить<b></b></div></div>
            <div class="fcClubWind" style="z-index:6">
                <?=TeamPopupWidget::widget(['is_club' => false, 'id_team' => $user_data['root_for_country'], 'layoutPath' => $layoutPath,])?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="fcZag bgnone">
            <h3>Любимый игрок:</h3>
            <div class="Fcright">
                <a href="javascript:void(0)"></a><div class="hint">Изменить<b></b></div></div>
            <div class="userName">
                <?=UserPopupWidget::widget(['is_user' => false, 'id_soccer' => $user_data['root_for_soccer'][0], 'layoutPath' => $layoutPath,])?>
                <!--<a href="javascript:void(0)" class="decUn decUnTP">Игорь Акинфеев<img src="<?/*=$layoutPath*/?>/img/flaghzhzhz.png" id="ImgFlag"  alt="" /></a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Игорь Акинфеев</a>
                                <img src="<?/*=$layoutPath*/?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?/*=$layoutPath*/?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?/*=$layoutPath*/?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?/*=$layoutPath*/?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>-->
            </div>
        </div>
    </div>
</div>