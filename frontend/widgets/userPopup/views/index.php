<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/10/15
 * Time: 8:55 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<a href="javascript:void(0)" class="decUn decUnTP"><?=$userModel->fname?> <?=$userModel->name?><img src="<?=$layoutPath?><?=$flag?>" id="ImgFlag"  alt="" /></a>
<div class="userStatsOut">
    <div class="infcClubWindarr"></div>
    <div class="userstats">
        <div class="UsNameAndFc">
            <div class="YourName">
                <a href="javascript:void(0)"><?=$userModel->fname?> <?=$userModel->name?></a>
                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                <b class="userNameBgGrad"></b>
            </div>
            <div class="FCclubName">
                <a href="javascript:void(0)"><?=$club?></a><img alt="" id="ImgFlag"  src="<?=$layoutPath?><?=$flag?>">
            </div>
            <div class="clear"></div>
        </div>
        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
        <div class="ratio">
            <div class="votes">41 голов</div>
            <div class="status">Капитан</div>
            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
            <div class="clear"></div>
        </div>
    </div>
    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
</div>