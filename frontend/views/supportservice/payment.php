<?php

use \frontend\themes\alltrade\assets\AppAssets;
use yii\helpers\Url;

$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
AppAssets::register($this);

?>
<div style="margin-top: 10px;"></div>
<div class="content">
	<div style="margin-top: 20px;"></div>
	<div style="border: 1px solid #ddd; padding: 10px;"><div class="help-help">
		<p style="font-size: 140%; margin-bottom: 20px;">Как я могу оплатить заказ?</p>
		<p>
			Чтобы оплатить заказ на AllTrade, следуйте алгоритму:
		</p>
		<p>
			1. Выберите заказ и нажмите кнопку "Оплатить сейчас"
		</p>
		<p>
			2. Выберите способ совершения платежа и переходите к оплате заказа
		</p>
		<img src="<?=$layoutPath?>/images/help/3.1.jpg" style="max-width: 100%;">
		<p>
			AllTrade поддерживает Visa, MasterCard, Maestro Debit Card, Western Union и банковские переводы. Чтобы узнать подробнее о способах оплаты, пожалуйста,пройдите по этой ссылке: https://icshall.alipay.com/hall/cateQuestion.htm?ccateId=457&pcateId=444&categoryId=457&language=ru_RU.
		</p>
		<p>
			Обратите внимание на минимальную сумму заказа для оплаты различными способами:
		</p>
		<img src="<?=$layoutPath?>/images/help/3.2.png" style="max-width: 100%;">
	</div></div>
</div>