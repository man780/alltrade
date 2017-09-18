<?php
use \frontend\themes\alltrade\assets\AppAssets;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
AppAssets::register($this);
?>
<div style="margin-top: 10px"></div>
<div class="content">
	<div class="bargain-top">
		<h1>AllTrade<br>интернет-магазин №1 в Узбекистане</h1>
		<a href="#bargain-id" class="a">
			<p>
				Почему нас выбрали более 12 000 000 покупателей?
			</p>
		</a>
	</div>
	<div style="margin-top: 20px;"></div>
	<div class="bargain-div-1">
		<img src="<?=$layoutPath?>/images/footer-menu/1.png">
		<h4>
			Большой выбор
		</h4>
		<p>
			· 100 000 000 товаров
		</p>
		<p>
			· 200 000 продавцов
		</p>
		<p>
			· 30 категорий товаров: от одежды и электроники до бытовой техники и продуктов питания
		</p>
	</div>
	<div id="bargain-id"></div>
	<div class="bargain-div-3">
		<img src="<?=$layoutPath?>/images/footer-menu/3.png">
		<h4>
			Выгодно
		</h4>
		<p>
			· Бесплатная доставка практически на все товары
		</p>
		<p>
			· Рoзничные товары по оптовым ценам
		</p>
		<p>
			· Европейский дизайн и высокое качество в разделе «Молл»
		</p>
	</div>
	<div class="bargain-div-2">
		<img src="<?=$layoutPath?>/images/footer-menu/2.png">
		<h4>
			Удобно
		</h4>
		<p>
			· 10 самых популярных способов оплаты
		</p>
		<p>
			· Сайт и поиск на русском языке
		</p>
		<p>
			· Покупки без посредников
		</p>
	</div>
	<div class="bargain-div-4">
		<img src="<?=$layoutPath?>/images/footer-menu/4.png">
		<h4>
			Безопасно
		</h4>
		<p>
			· Продавец получает деньги только после вашего подтверждения заказа
		</p>
		<p>
			· Возврат денег, если товар не соответствует описанию или не доставлен вовремя
		</p>
	</div>
</div>
<div class="clear"></div>