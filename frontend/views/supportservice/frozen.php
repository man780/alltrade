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
		<p style="font-size: 140%; margin-bottom: 20px;">Что значит ?замороженный заказ??</p>
		<p>
			Статус «замороженный заказ» значит, что продавец подозревается в мошеннических действиях. Обычно проверка продавца занимает 3 рабочих дня. Если в течение 3 дней продавец не отвечает на запрос, заказ будет закрыт, а деньги возвращены на ваш счёт.
		</p>
		<p>
			Если продавец предоставит информацию по данному запросу в течение 3 рабочих дней, проверка может занять до 15 рабочих дней. Вы можете войти в ваш профиль и узнать о результатах проверки. 
		</p>
		<p>
			Как правило, возврат денег занимает 7-10 рабочих дней.
		</p>
		<p>
			Если деньги не возвращены на ваш счёт в течение 15 рабочих дней, вы можете обратиться в Центр Помощи.
		</p>
	</div></div>
</div>