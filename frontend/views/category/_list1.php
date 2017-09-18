<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 5/27/16
 * Time: 2:08 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
$imageArr = json_decode($model->image);
if(is_array($imageArr)){
    $image = '/images/ads/'.$model->id.'/'.$imageArr[0];
}else{
    $image = '/images/placeHolder.png';
}
?>


<a href="<?=Url::toRoute(['ads/view', 'id' => $model->id]);?>" class="a">
    <li class="categorylist">
        <p style="text-align: center;"></p>
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td valign="top" style="width: 50%">
                    <p style="text-align: left; padding: 5px;"><img class="qualityMarkimglist" src="<?=$image;?>"></p>
                </td>
                <td valign="top" style="width: 50%">
                    <p style="font-size: 140%; font-weight: bold">
                        <?=$model->name?>
                    </p>
                    <p style="font-size: 120%;">
                        <?=$model->cost?>
                    </p>
                </td>
            </tr>
        </table>
    </li>
</a>