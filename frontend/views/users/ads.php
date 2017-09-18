<?
use yii\helpers\Url;
?>
<h1 style="margin: 0; font-size: 120%;" class="profile-header-h1">
    Мои объявление
</h1>
<p style="font-size: 90%; color: #999;" class="profile-header-p">Здесь вы найдёте ваши активные и архивные объявления</p>
<div style="margin-top: 10px;"></div>

<div class="clear"></div>
<div style="margin: 10px 0; border-bottom: 1px solid #ddd;"></div>
<div class="profile-ad">
    <div class="profile-menu-sub">
        <span style="padding: 5px; border-right: 1px solid #ddd; cursor: pointer;"  class="profile-active-h1 profile-act">Активные</span>
        <span style="padding: 5px; cursor: pointer" class="profile-inactive-h1">Неактивные</span>
    </div>
    <div style="margin-top: 10px; border-bottom: 1px solid #ddd;"></div>
    <div class="profile-active">
        <div class="profile-ads">
            <div class="profile-ads-container1">
                <div class="profile-ads-name1">
                    Дата
                </div>
                <div class="profile-ads-name21"></div>
                <div class="profile-ads-name3">
                    Цена
                </div>
                <div class="profile-ads-name4">
                    Сообщения
                </div>
                <div class="clear"></div>
            </div>
            <div style="border-bottom: 1px solid #ddd;"></div>

            <?foreach ($ads as $key => $ad):?>
                <?if($ad['status'] == 0) continue;?>
                <?
                    $imageArr = json_decode($ad['image'], true);
                    if(is_array($imageArr)){
                        $image = '/images/ads/'.$ad['id'].'/'.$imageArr[0]['min'];
                    }else{
                        $image = '/images/placeHolder.png';
                    }
                ?>
                <div class="profile-ads-container">
                    <div class="profile-ads-name1">
                        <p class="profile-ads-name1-p1">Добавлено:</p>
                        <p class="profile-ads-name1-p1">11.08.2016</p>
                        <p class="profile-ads-name1-p2">Активен до:</p>
                        <p class="profile-ads-name1-p2">11.09.2016</p>
                    </div>
                    <div class="profile-ads-name2">
                        <div class="profile-ads-name2-p1">
                            <img class="profile-ads-name2-img" src="<?=$image;?>">
                            <div class="profile-ads-container-800">
                                <p class="profile-ads-name2-p21"><?=$ad['name'];?></P>
                                <p>
                                    <?=$ad['cost'];?>
                                    <? if ($ad['id_currency'] == 1) {
                                        echo "сум";
                                    }else {
                                        echo "у.е.";
                                    } ?>
                                </p>
                                <p>
                                    Добавлено: 11.08.2016<br>Активен до: 11.09.2016
                                </p>
                            </div>
                        </div>
                        <div class="profile-ads-name2-div1">
                            <p class="profile-ads-name2-p2"><?=$ad['name'];?></P>
                            <p class="profile-ads-name2-p3">
                                <a href="" class="profile-a-p00"><span>Сообщения (1)</span></a>
                            </p>
                            <p>
                                <a href="<?=Url::toRoute(['/ads/view', 'id' => $ad['id']])?>" class="profile-a-p1"><span>Просмотреть</span></a>
                            </p>
                            <p>
                                <a href="<?=Url::toRoute(['/ads/update', 'id' => $ad['id']])?>" class="profile-a-p2"><span>Редактировать</span></a>
                            </p>
                            <p>
                                <a href="<?=Url::toRoute(['/ads/disable', 'id' => $ad['id']])?>" class="profile-a-u"><span>Деактивировать</span></a>
                            </p>
                        </div>
                        <div class="profile-ads-name2-div2">
                            <span>
                                Статистика:
                            </span>
                            <span class="profile-ads-name2-view">
                                Просмотры: <?=$ad['view'];?>
                            </span>
                            <span class="profile-ads-name2-star">
                                В Избранном: 3
                            </span>
                        </div>
                    </div>
                    <div class="profile-ads-name3">
                        <p>
                            <?=$ad['cost'];?>
                            <? if ($ad['id_currency'] == 1) {
                                echo "сум";
                            }else {
                                echo "у.е.";
                            } ?>
                        </p>
                    </div>
                    <div class="profile-ads-name4">
                        <a href="" style="text-decoration: none"><span style="background: #0098d0; color: #fff; width: 25px; padding: 5px; border-radius: 3px; font-size: 120%"><img src="<?=$layoutPath?>/images/profile/1.png" style="width: 10px;"> 1</span></a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div style="border-bottom: 1px solid #ddd;"></div>
            <?endforeach;?>
        </div>
    </div>


    <div class="profile-inactive">
        <div class="profile-ads">
            <div class="profile-ads-container1">
                <div class="profile-ads-name1">
                    Дата
                </div>
                <div class="profile-ads-name21"></div>
                <div class="profile-ads-name3">
                    Цена
                </div>
                <div class="profile-ads-name4">
                    Сообщения
                </div>
                <div class="clear"></div>
            </div>
            <div style="border-bottom: 1px solid #ddd;"></div>

            <?foreach ($ads as $key => $ad):?>
                <?if($ad['status'] != 0) continue;?>
                <?
                    $imageArr = json_decode($ad['image'], true);
                    if(is_array($imageArr)){
                        $image = '/images/ads/'.$ad['id'].'/'.$imageArr[0]['min'];
                    }else{
                        $image = '/images/placeHolder.png';
                    }
                ?>
                <div class="profile-ads-container">
                    <div class="profile-ads-name1">
                        <p class="profile-ads-name1-p1">Добавлено:</p>
                        <p class="profile-ads-name1-p1">11.08.2016</p>
                        <p class="profile-ads-name1-p2">Активен до:</p>
                        <p class="profile-ads-name1-p2">11.09.2016</p>
                    </div>
                    <div class="profile-ads-name2">
                        <div class="profile-ads-name2-p1">
                            <img class="profile-ads-name2-img" src="<?=$image;?>">
                            <div class="profile-ads-container-800">
                                <p class="profile-ads-name2-p21"><?=$ad['name'];?></P>
                                <p>
                                    <?=$ad['cost'];?>
                                    <? if ($ad['id_currency'] == 1) {
                                        echo "сум";
                                    }else {
                                        echo "у.е.";
                                    } ?>
                                </p>
                                <p>
                                    Добавлено: 11.08.2016<br>Активен до: 11.09.2016
                                </p>
                            </div>
                        </div>
                        <div class="profile-ads-name2-div1">
                            <p class="profile-ads-name2-p2"><?=$ad['name'];?></p>
                            <p>
                                <a href="<?=Url::toRoute(['/ads/activate', 'id' => $ad['id']])?>" class="profile-a-p0"><span>Активировать</span></a>
                            </p>
                            <p class="profile-ads-name2-p3">
                                <a href="" class="profile-a-p00"><span>Сообщения (1)</span></a>
                            </p>
                            <p>
                                <a href="<?=Url::toRoute(['/ads/view', 'id' => $ad['id']])?>" class="profile-a-p1"><span>Просмотреть</span></a>
                            </p>
                            <p>
                                <a href="<?=Url::toRoute(['/ads/update', 'id' => $ad['id']])?>" class="profile-a-p2"><span>Редактировать</span></a>
                            </p>
                            <p>
                                <a href="<?=Url::toRoute(['/ads/delete', 'id' => $ad['id']])?>" class="profile-a-u">Удалить</a>
                            </p>

                        </div>
                        <div class="profile-ads-name2-div3">
                            <span>
                                Статистика:
                            </span>
                            <span class="profile-ads-name2-view">
                                Просмотры: <?=$ad['view'];?>
                            </span>
                            <span class="profile-ads-name2-star">
                                В Избранном: 3
                            </span>
                        </div>
                    </div>
                    <div class="profile-ads-name3">
                        <p>
                            <?=$ad['cost'];?>
                            <? if ($ad['id_currency'] == 1) {
                                echo "сум";
                            }else {
                                echo "у.е.";
                            } ?>
                        </p>
                    </div>
                    <div class="profile-ads-name4">
                        <a href="" style="text-decoration: none"><span style="background: #0098d0; color: #fff; width: 25px; padding: 5px; border-radius: 3px; font-size: 120%"><img src="<?=$layoutPath?>/images/profile/1.png" style="width: 10px;"> 1</span></a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div style="border-bottom: 1px solid #ddd;"></div>
            <?endforeach;?>
        </div>
    </div>
</div>