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
		<p style="font-size: 140%; margin-bottom: 20px;">Стоимость доставки.</p>
		<p>
			Все услуги доставки и связанные с ними дополнительные платежи устанавливаются продавцом. Продавец может выбирать из восьми доступных служб курьерской доставки: TNT, EMS, UPS, FedEx, DHL, China Post, Hongkong Post и S.F. Express. Стоимость доставки автоматически вычисляется на основании веса, габаритов и объема отправления.
		</p>
		<p>
			Вы можете узнать стоимость пересылки на странице товара, как показано на изображении:
		</p>
		<img src="<?=$layoutPath?>/images/help/2.1.jpg" style="max-width: 100%;">
		<p>
			Если вы думаете, что стоимость доставки данного товара явно завышена, вы можете решить этот вопрос напрямую с продавцом.
		</p>
		<p>
			Если продавец согласится снизить стоимость доставки, он/она может изменить ее на основании соглашения перед получением оплаты. Также вы можете выбрать альтернативные способы пересылки для снижения ее стоимости.
		</p>
	</div></div>
</div>