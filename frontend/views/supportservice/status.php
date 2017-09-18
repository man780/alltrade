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
		<p style="font-size: 140%; margin-bottom: 20px;">Как я могу проверить статус заказа?</p>
		<p>
			Для уточнения статуса заказа вы можете следовать описанной инструкции:
		</p>
		<p>
			1. Зайдите в вашу учетную запись и перейдите в "Мои заказы"
		</p>
		<p>
			2. Посмотрите статус вашего заказа в следующих вкладках:
		</p>
		<img src="<?=$layoutPath?>/images/help/10.1.jpg" style="max-width: 100%;">
		<p>
			3. Также вы можете проверить статус во вкладке "Возвраты и Споры":
		</p>
		<img src="<?=$layoutPath?>/images/help/10.4.jpg" style="max-width: 100%;">
		<p>
			<b>Как найти нужный заказ в списке?</b>
		</p>
		<p>
			Если вам известен номер нужного заказа, вы можете осуществить поиск в соответствии с картинкой ниже:
		</p>
		<img src="<?=$layoutPath?>/images/help/10.2.jpg" style="max-width: 100%;">
		<p>
			Если вы не знаете номер заказа, вы можете использовать перечисленные ниже функции для его поиска:
		</p>
		<img src="<?=$layoutPath?>/images/help/10.3.jpg" style="max-width: 100%;">
	</div></div>
</div>