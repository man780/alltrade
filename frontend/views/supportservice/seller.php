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
		<p style="font-size: 140%; margin-bottom: 20px;">Как связаться с продавцом?</p>
		<p>
			Перед тем, как разместить заказ, вы можете связаться с продавцом на странице описания товара, нажав на кнопку «Отправить сообщение» или на значок TradeManager. 
		</p>
		<img src="<?=$layoutPath?>/images/help/9.1.png" style="max-width: 100%;">
		<p>
			Вы также можете найти желаемые товары, воспользовавшись поиском по категориям. Поиск по категориям доступен на любой странице.
		</p>
		<img src="<?=$layoutPath?>/images/help/1.2.jpg" style="max-width: 100%;">
		<p>
			Вы сможете найти контактную информацию продавца в вашем списке заказов.
		</p>
		<img src="<?=$layoutPath?>/images/help/9.2.jpg" style="max-width: 100%;">
	</div></div>
</div>