<?
	use yii\helpers\Url;
?>
<div id="footer">
	<div style="border-bottom: 1px solid red; margin-bottom: 15px;"></div>
	<div class="footercenterdiv">
		<div class="clear"></div>
		<div class="footerdiv">
			<a href="<?=Url::toRoute('/footer/bargain')?>" class="a">
			<p style="text-align: center;"><img src="<?=$layoutPath?>/images/footer/1.png"></p>
			<h4 style="text-align: center;">Выгодные покупки</h4>
			<p style="text-align: center; font-size: 80%; color: #777">Более 100 миллионов товаров по оптовым ценам.</p>
			</a>
		</div>
		<div class="footerdiv">
			<a href="<?=Url::toRoute('/footer/index#gid-delivery')?>" class="a">
			<p style="text-align: center;"><img src="<?=$layoutPath?>/images/footer/2.png"></p>
			<h4 style="text-align: center;">Глобальная доставка</h4>
			<p style="text-align: center; font-size: 80%; color: #777">Доставка в более чем 200 стран и регионов.  Сайт на 5 языках.</p>
			</a>
		</div>
		<div class="footerdiv">
			<a href="<?=Url::toRoute('/footer/index')?>" class="a">
			<p style="text-align: center;"><img src="<?=$layoutPath?>/images/footer/3.png"></p>
			<h4 style="text-align: center;">Безопасные покупки</h4>
			<p style="text-align: center; font-size: 80%; color: #777">Используйте самые популярные и безопасные способы оплаты.</p>
			</a>
		</div>
		<div class="footerdiv">
			<a href="#" class="a">
			<p style="text-align: center;"><img src="<?=$layoutPath?>/images/footer/4.png"></p>
			<h4 style="text-align: center;">Защита Покупателя</h4>
			<p style="text-align: center; font-size: 80%; color: #777">AllTrade защищает ваши покупки с момента заказа до получения доставки.</p>
			</a>
		</div>
		<div class="footerdiv">
			<a href="<?=Url::toRoute('/supportservice/index')?>" class="a">
			<p style="text-align: center;"><img src="<?=$layoutPath?>/images/footer/5.png"></p>
			<h4 style="text-align: center;">Помощь 24/7</h4>
			<p style="text-align: center; font-size: 80%; color: #777">Круглосуточная поддержка покупателей.</p>
			</a>
		</div>
		<div class="footerdiv">
			<a href="#" class="a">
			<p style="text-align: center;"><img src="<?=$layoutPath?>/images/footer/6.png"></p>
			<h4 style="text-align: center;">Приложения</h4>
			<p style="text-align: center; font-size: 80%; color: #777">Скачивайте приложения и наслаждайтесь покупками.</p>
			</a>
		</div>
	</div>

	<div class="clear"></div>
	<div style="border-bottom: 1px solid red; margin-bottom: 15px; margin-top: 15px;"></div>
	
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
			<!-- <h4 style="margin-top: 5px; margin-bottom: 5px;">Как покупать</h4> -->
			<p><a href="<?=Url::toRoute('/footer/index')?>" class="a">Как покупать</a></p>
			<p><a href="<?=Url::toRoute('/footer/index')?>" class="a">Гид покупателям</a></p>
			<p><a href="<?=Url::toRoute('/user/register')?>" class="a">Зарегистрироваться</a></p>
			<p><a href="<?=Url::toRoute('/footer/index#gid-payment')?>" class="a">Как оплатить заказ</a></p>
			<p><a href="<?=Url::toRoute('/footer/index#gid-delivery')?>" class="a">Выбор доставки</a></p>
			<p><a href="#" class="a">Защита Покупателя</a></p>
			<p><a href="<?=Url::toRoute(['/footer/sitemap/', 'id' => '2']);?>" class="a">Карта AllTrade</a></p>
		</div>
		<div>
			<!-- <h4 style="margin-top: 5px; margin-bottom: 5px;">Сервисный центр</h4> -->
			<p><a href="#" class="a">Условия использования</a></p>
			<p><a href="<?=Url::toRoute('/supportservice/index')?>" class="a">Служба поддержки</a></p>
			<p><a href="#" class="a">Партнерская программа</a></p>
			<p><a href="#" class="a">Мобильные приложения</a></p>
			<p><a href="#" class="a">Технические предложения</a></p>
			<!-- <p><a href="#" class="a">Договор оказания услуг</a></p> -->
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