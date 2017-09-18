<?
	use yii\helpers\Url;
?>
<div id="footer">
	<div style="border-bottom: 1px solid red; margin-bottom: 10px;"></div>
	<div class="footercenterdiv" style="padding: 0 10px; box-sizing: border-box; font-size: 80%">
		<p style="margin-bottom: 5px;">
			Доска бесплатных объявлений Узбекистана
		</p>
		<p>
			Бесплатные объявления Узбекистана на AllTrade.uz - здесь вы найдете то, что искали. Нажав на кнопку "Добавить обявление", вы сможете разместить бесплатное объявление на любую необходимую тематику - поиск работы, услуги, продажа автомобилей, квартир, домов, телефонов и многое другое. С помощью сайта объявлений AllTrade в Узбекистане вы можете найти, продать или купить практически все, что угодно. Воспользовавшись функцией поиска, вы без труда найдете уже опубликованные объявления интересующей вас тематики.<br>AllTrade в Узбекистане - ваш надежный и незаменимый помощник.
		</p>
	</div>

	<div class="clear"></div>
	<div style="border-bottom: 1px solid red; margin-bottom: 15px; margin-top: 10px;"></div>
	
	<div class="socialNetwork">
		<div class="socialNetwork-div">
			<h4 style="margin-top: 5px; margin-bottom: 5px;">Новости AllTrade</h4>
			<form action="#" method="POST">
				<input type="text" name="text" placeholder="Ваш адрес эл. почты" style="border: 1px solid #ddd; font-size: 80%; padding: 5px; max-width: 100%;">
				<input type="submit" value="Подписаться" style="background-color: red; border: 1px solid #ddd; color: #fff; font-size: 90%; padding: 5px;">
			</form>
			<h4 style="margin-bottom: 5px;">Будьте на связи</h4>
			<div style="float: left; margin-right: 10px;">
				<a href="#"><img src="<?=$layoutPath?>/images/footer/socialNetwork/1.png"></a>
			</div>
			<div style="float: left; margin-right: 10px;">
				<a href="#"><img src="<?=$layoutPath?>/images/footer/socialNetwork/2.png"></a>
			</div>
			<div style="float: left; margin-right: 10px;">
				<a href="#"><img src="<?=$layoutPath?>/images/footer/socialNetwork/3.png"></a>
			</div>
			<div style="float: left; margin-right: 10px;">
				<a href="#"><img src="<?=$layoutPath?>/images/footer/socialNetwork/4.png"></a>
			</div>
		</div>
		<div class="socialNetwork-div">
			<p><a href="<?=Url::toRoute('/footer/index')?>" class="a">Как покупать и продавать</a></p>
			<p><a href="<?=Url::toRoute('/footer/index')?>" class="a">Гид пользователям</a></p>
			<p><a href="<?=Url::toRoute('/user/register')?>" class="a">Зарегистрироваться</a></p>
			<p><a href="<?=Url::toRoute('/adstop/index')?>" class="a">Топовые объявление</a></p>
			<p><a href="<?=Url::toRoute(['/footer/sitemap/', 'id' => '1']);?>" class="a">Карта AllTrade</a></p>
		</div>
		<div class="socialNetwork-div">
			<p><a href="#" class="a">Условия использования</a></p>
			<p><a href="<?=Url::toRoute('/supportservice/index')?>" class="a">Служба поддержки</a></p>
			<p><a href="#" class="a">Мобильные приложения</a></p>
			<p><a href="#" class="a">Технические предложения</a></p>
		</div>
	</div>
	<div class="clear"></div>
	<div style="border-bottom: 1px solid #ddd; margin-bottom: 15px; margin-top: 15px;"></div>

	<div class="payment">
		<div class="paymentimg">
			<img src="<?=$layoutPath?>/images/footer/payment/1.jpg">
		</div>
		<div class="paymentimg">
			<img src="<?=$layoutPath?>/images/footer/payment/2.jpg">
		</div>
		<div class="paymentimg">
			<img src="<?=$layoutPath?>/images/footer/payment/3.png">
		</div>
		<div class="paymentimg">
			<img src="<?=$layoutPath?>/images/footer/payment/4.jpg">
		</div>
		<div class="paymentimg">
			<img src="<?=$layoutPath?>/images/footer/payment/5.jpg">
		</div>
	</div>

	<div class="clear"></div>
	<div style="border-bottom: 1px solid #ddd; padding-top: 15px;"></div>
	<div style="padding-top: 15px;"></div>
</div>