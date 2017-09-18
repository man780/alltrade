<?php

use \frontend\themes\alltrade\assets\AppAssets;
use yii\helpers\Url;

$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
AppAssets::register($this);

?>
<div style="margin-top: 10px;"></div>
<div class="content">
	<h2 style="padding: 10px; margin: 0; ">Служба поддержки</h2>
	<div style="border: 1px solid #ddd; padding: 10px;">
		<p style="font-size: 140%; margin-bottom: 10px;">Часто задаваемые вопросы об AllTrade</p>
		<div class="help-help">
			<a href="<?=Url::toRoute('/supportservice/search')?>" class="a">
				<p>
					1. Как искать товар?
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/delivery')?>" class="a">
				<p>
					2. Стоимость доставки
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/payment')?>" class="a">
				<p>
					3. Как я могу оплатить заказ?
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/satisfied')?>" class="a">
				<p>
					4. Я не удовлетворен своей покупкой. Что я могу сделать?
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/return')?>" class="a">
				<p>
					5. Как я могу запросить возврат средств?
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/cancellation')?>" class="a">
				<p>
					6. Как я могу отменить заказ?
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/notreceived')?>" class="a">
				<p>
					7. Что делать, если я не получил(а) товар, а мой заказ был завершён?
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/frozen')?>" class="a">
				<p>
					8. Что значит ?замороженный заказ??
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/seller')?>" class="a">
				<p>
					9. Как связаться с продавцом?
				</p>
			</a>
			<a href="<?=Url::toRoute('/supportservice/status')?>" class="a">
				<p>
					10. Как я могу проверить статус заказа?
				</p>
			</a>
		</div>
	</div>
</div>