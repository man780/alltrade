<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/16/16
 * Time: 10:26 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
?>
<?=$this->render('/layouts/_eshopmenu', ['layoutPath'=>$layoutPath, 'id'=>$id]);?>
<div style="margin-top: 10px;"></div>
<div id="container">
    <div style="margin-top: 10px;"></div>
    <h2 style="color: red; margin: 0; padding: 10px; float: left">О МАГАЗИНЕ</h2>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid red;"></div>
    <div style="padding: 5px;">
    	<?=$company->text;?>
    </div>
</div>