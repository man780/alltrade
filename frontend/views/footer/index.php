<?php
use \frontend\themes\alltrade\assets\AppAssets;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
AppAssets::register($this);
?>
<div class="content">
	<img src="<?=$layoutPath?>/images/footer-menu-gid/1.jpg" style="max-width: 100%; display: block">
	<div class="footer-menu-gid">
		<ul>
			<a href="#gid-registration">
				<li>
					<span class="gid-cart">Регистрация</span>
				</li>
			</a>
			<a href="#gid-search">
				<li>
					<span class="gid-search">Поиск товара</span>
				</li>
			</a>
			<a href="#gid-payment">
				<li>
					<span class="gid-payment">Оплата заказа</span>
				</li>
			</a>
			<a href="#gid-delivery">
				<li>
					<span class="gid-delivery">Доставка</span>
				</li>
			</a>
			<a href="#gid-rating">
				<li>
					<span class="gid-rating">Рейтинги и отзывы</span>
				</li>
			</a>
			<a href="#gid-protection">
				<li>
					<span class="gid-protection">Защита Покупателя и возвраты</span>
				</li>
			</a>
		</ul>
		<div class="clear"></div>
	</div>
	<h1 style="text-align: center; color: #ff0000; margin: 30px 0;">ПОКУПАТЬ НА ALLTRADE ЛЕГКО!</h1>
	<p style="text-align: center; font-size: 135%; color: #555;">
		Узнайте, как найти и купить нужный товар,<br>
		как и когда его доставят, как оставить отзыв, если вам<br>
		понравилось, и что делать, если нет.
	</p>



	<div id="gid-registration"></div>
	<img src="<?=$layoutPath?>/images/footer-menu-gid/2.jpg" style="width: 100%; display: block">
	<div class="footer-gid-h1">
		<p class="footer-gid-title">
			1. Регистрация
		</p>
		<p class="footer-gid-detail down">
			Подробнее
		</p>
		<div class="clear"></div>
	</div>
	<div class="footer-god-content">
		<p>
			1. <b>Нажмите на кнопку</b> <a href="">«Регистрация»</a> на главной странице или в правом верхнем углу любой страницы.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/1.1.png" style="max-width: 100%; display: block; float: right">
		<div class="clear"></div>
		<p>
			2. <b>Введите ваше имя и адрес</b> электронной почты.
		</p>
		<p>
			3. Придумайте и подтвердите пароль.
		</p>
		<p>
			4. <b>Нажмите на «Создать ваш профиль»</b> и можете приступать к покупкам!
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/1.2.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
	</div>
	<div class="footer-gid-council">
		<p class="footer-gid-correct">
			После регистрации <b>заполните ваш адрес доставки</b> в своём профиле. Пожалуйста, <b>запишите его буквами английского алфавита</b>. Например: ул. Строителей – <b>ul. Stroiteley</b>. Вы также можете указать адрес доставки во время оформления заказа.
		</p>
		<p class="footer-gid-info">
			Совет
		</p>
	</div>



	<div id="gid-search"></div>
	<img src="<?=$layoutPath?>/images/footer-menu-gid/3.jpg" style="width: 100%; display: block">
	<div class="footer-gid-h1">
		<p class="footer-gid-title">
			2. Поиск товара
		</p>
		<p class="footer-gid-detail down">
			Подробнее
		</p>
		<div class="clear"></div>
	</div>
	<div class="footer-god-content">
		<p>
			1. <b>Введите ключевые слова</b> в строку поиска в верхней части страницы AllTrade.
		</p>
		<p>
			2. При вводе вы также увидите <b>наиболее популярные варианты</b> и <b>свои недавние запросы</b>.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/2.1.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
		<p>
			3. Если вас интересует широкая группа товаров, например, аксессуары, вы можете <b>воспользоваться поиском по категориям</b>.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/2.2.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
		<p>
			4. <b>Удобные фильтры помогут вам</b> отобрать нужное в результатах поиска, например, товары с бесплатной доставкой и скидками.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/2.3.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
		<p>
			5. <b>Выберите цвет, размер и количество</b> на странице описания товара и нажмите <b>«Купить сейчас»</b>, чтобы оплатить сразу, или <b>«Добавить в корзину»</b>, чтобы оплатить товары позже.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/2.4.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
	</div>
	<div class="footer-gid-council">
		<p class="footer-gid-correct">
			<b>На AllTrade более 200 тысяч продавцов</b>, и именно они отправляют вам заказы. Чтобы помочь вам выбрать лучших продавцов, у AllTrade есть удобная система рейтинга.
		</p>
		<p class="footer-gid-correct">
			<b>Обращайте внимание на отзывы других покупателей и рейтинг продавца</b> при выборе товаров.
		</p>
		<p class="footer-gid-info">
			Совет
		</p>
	</div>



	<div id="gid-payment"></div>
	<img src="<?=$layoutPath?>/images/footer-menu-gid/4.jpg" style="width: 100%; display: block">
	<div class="footer-gid-h1">
		<p class="footer-gid-title">
			3. Оплата заказа
		</p>
		<p class="footer-gid-detail down">
			Подробнее
		</p>
		<div class="clear"></div>
	</div>
	<div class="footer-god-content">
		<p>
			1. <b>Нажмите «Купить сейчас»</b> на странице выбранного товара или <b>«Оформить заказ»</b> в вашей корзине, если вы добавили товары в корзину ранее.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/3.1.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
		<p>
			2. На странице оплаты <b>выберите наиболее удобный</b> для вас способ платежа.
		</p>
		<p>
			3. Если вы оплачиваете банковской картой или другой электронной платёжной системой (например, Alipay, QIWI Wallet или Яндекс.Деньги), <b>платёж будет принят в течение 24 часов</b>.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/3.2.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
	</div>
	<div class="footer-gid-council">
		<p class="footer-gid-correct">
			<b>Ваши деньги</b> будут переведены продавцу <b>только после подтверждения вами получения товара</b> или после истечения срока Защиты Покупателя.
		</p>
		<p class="footer-gid-correct">
			<b>Следите за таймером Защиты Покупателя</b> на странице заказа и <b>подтверждайте получение</b> вашего заказа только после того, <b>как убедитесь, что товар получен</b> в удовлетворительном состоянии.
		</p>
		<p class="footer-gid-correct">
			При необходимости вы можете <b>запросить отмену заказа</b> после оплаты, <b>если он ещё не был отправлен вам</b>. Для этого вам нужно <b>нажать «Отменить заказ»</b> на странице заказа. Обратите внимание, что <b>продавец должен подтвердить отмену заказа</b>, и только после этого будет осуществлён денежный возврат.
		</p>
		<p class="footer-gid-info">
			Совет
		</p>
	</div>


	<div id="gid-delivery"></div>
	<img src="<?=$layoutPath?>/images/footer-menu-gid/5.jpg" style="width: 100%; display: block">
	<div class="footer-gid-h1">
		<p class="footer-gid-title">
			4. Доставка
		</p>
		<p class="footer-gid-detail down">
			Подробнее
		</p>
		<div class="clear"></div>
	</div>
	<div class="footer-god-content">
		<p>
			1. Продавцы на AllTrade предлагают <b>разные способы доставки</b>, отличающиеся по стоимости и скорости. Вы можете увидеть <b>стоимость и расчётное время доставки</b> в вашу страну <b>на странице описания каждого товара</b>.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/4.1.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
		<p>
			2. Ориентировочные сроки:<br>
			— Стандартная доставка Почтой Китая: <b>от 15 до 50 дней</b><br>
			— Доставка EMS: <b>от 10 до 20 дней</b><br>
			— Экспресс-доставка SPSR: <b>около 7 дней</b>
		</p>
		<p>
			3. Большинство продавцов отправляют товары в течение 2 - 4 рабочих дней после получения оплаты.
		</p>
		<p>
			4. Вы можете <b>отследить передвижение посылки</b> в списке ваших заказов, нажав <b>«Просмотреть данные»</b>.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/4.2.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
	</div>
	<div class="footer-gid-council">
		<p class="footer-gid-correct">
			<b>Если срок доставки подходит к концу</b>, а вы ещё не получили товар – <b>свяжитесь с продавцом</b> для продления срока или <b>откройте спор на странице заказа</b> для получения денежного возврата.
		</p>
		<p class="footer-gid-info">
			Совет
		</p>
	</div>


	<div id="gid-rating"></div>
	<img src="<?=$layoutPath?>/images/footer-menu-gid/6.jpg" style="width: 100%; display: block">
	<div class="footer-gid-h1">
		<p class="footer-gid-title">
			5. Рейтинги и отзывы
		</p>
		<p class="footer-gid-detail down">
			Подробнее
		</p>
		<div class="clear"></div>
	</div>
	<div class="footer-god-content">
		<p>
			1. Вы можете <b>поставить оценку товару и продавцу, нажав «Оставить отзыв»</b> на странице <b>«Управление отзывами»</b>, в течение 30 дней после получения товара.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/5.1.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
		<p>
			2. <b>Ваши отзывы помогают</b> другим покупателям при выборе товара и <b>влияют на рейтинг продавца</b>, изображённый <b>в виде медалей, алмазов или корон</b>.
		</p>
		<p>
			3. <b>Продавцы с высшими оценками</b> и лучшей репутацией получают <b>статус топ-продавцов</b>.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/5.2.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
	</div>
	<div class="footer-gid-council">
		<p class="footer-gid-correct">
			<b>Вы можете изменить</b> свою оценку <b>один раз</b> в течение 30 дней.
		</p>
		<p class="footer-gid-info">
			Совет
		</p>
	</div>


	<div id="gid-protection"></div>
	<img src="<?=$layoutPath?>/images/footer-menu-gid/7.jpg" style="width: 100%; display: block">
	<div class="footer-gid-h1">
		<p class="footer-gid-title">
			6. Защита Покупателя и возвраты
		</p>
		<p class="footer-gid-detail down">
			Подробнее
		</p>
		<div class="clear"></div>
	</div>
	<div class="footer-god-content">
		<p>
			1. <b>Защита Покупателя</b> – это программа, которая <b>защищает</b> ваши покупки <b>с момента заказа до получения товара.</b><br>
			Как она действует? <br>
			Вы можете получить возврат, если:<br>
			— вы не получили товар в указанные продавцом сроки<br>
			— полученный товар <b>не соответствует описанию</b><br>
			— полученный <b>товар оказался подделкой</b> вместо заявленного оригинала.
		</p>
		<p>
			2. Если у вас <b>возникли проблемы</b> с заказом, <b>свяжитесь с продавцом</b> для решения вопроса.
		</p>
		<p>
			3. Если вам не удалось решить проблему с продавцом, <b>откройте спор на странице заказа</b> для получения денежного возврата.
		</p>
		<img src="<?=$layoutPath?>/images/footer-menu-gid/6.1.jpg" style="max-width: 100%; display: block; float: left">
		<div class="clear"></div>
	</div>
	<div class="footer-gid-council">
		<p class="footer-gid-correct">
			<b>Сроки Защиты Покупателя могут отличаться</b> у разных продавцов, но <b>не превышают</b> 120 календарных дней.
		</p>
		<p class="footer-gid-correct">
			<b>Вы можете увидеть срок защиты</b> на странице каждого заказа.
		</p>
		<p class="footer-gid-info">
			Совет
		</p>
	</div>
</div>