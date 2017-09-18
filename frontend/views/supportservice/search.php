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
		<p style="font-size: 140%; margin-bottom: 20px;">Как искать товар?</p>
		<p>
			Чтобы найти желаемый товар, пожалуйста, введите ключевые слова в строку поиска на AllTrade, которая расположена в верхней части страницы.
		</p>
		<p>
			При вводе запроса в строку поиска вы увидите варианты наиболее популярных запросов, а также ваши недавние запросы. 
		</p>
		<img src="<?=$layoutPath?>/images/help/1.1.png" style="max-width: 100%;">
		<p>
			Вы также можете найти желаемые товары, воспользовавшись поиском по категориям. Поиск по категориям доступен на любой странице.
		</p>
		<img src="<?=$layoutPath?>/images/help/1.2.jpg" style="max-width: 100%;">
		<p>
			Для получения более точных результатов используйте функцию расширенного поиска.
		</p>
		<img src="<?=$layoutPath?>/images/help/1.3.png" style="max-width: 100%;">
	</div></div>
</div>