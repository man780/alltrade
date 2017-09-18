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
$bottomCat2 = $categories['categories']
?>
<div id="leftmenu">
    <ul style="margin: 0; padding: 0;">
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
                <?foreach($bottomCat as $k => $cat):?>
                <div class="submenu">
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
                <?endforeach;?>
            </ul>
        </li>
        <?endforeach;?>
    </ul>
</div>
