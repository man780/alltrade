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
    <h2 style="color: red; margin: 0; padding: 10px; float: left">КОНТАКТЫ</h2>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid red;"></div>
    <div style="padding: 10px;">
    	<div class="contact-left">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td width="40px" style="padding: 10px;">
						<img src="/images/eshoppage/1.png">
					</td>
					<td>
						Магазин: <b><?=$company->name;?></b>
					</td>
				</tr>
				<tr>
					<td style="padding: 10px;">
						<img src="/images/eshoppage/2.png">
					</td>
					<td>
						Адрес: <b><?=$company->address?></b>
					</td>
				</tr>
				<tr>
					<td style="padding: 10px;">
						<img src="/images/eshoppage/3.png">
					</td>
					<td>
						Телефон: <b><?=$company->phone;?></b>
					</td>
				</tr>
			</table>
		</div>
		<div class="contact-right">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1498.084994426535!2d69.32479644240948!3d41.32691680839366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25465cba59e2cce6!2sGlenbay!5e0!3m2!1sru!2s!4v1468577086870" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="clear"></div>
    </div>
</div>