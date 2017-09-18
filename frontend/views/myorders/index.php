<?
	$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
?>
<style type="text/css">
	.myorders-goods-undelivered1, .myorders-goods-undelivered2, .myorders-goods-undelivered3 {
		border: 2px solid red;
		border-radius: 20px;
		padding: 5px 10px;
		color: red;
		line-height: 35px;
		white-space: nowrap;
		cursor: pointer;
	}

	.myorders-goods-delivered1, .myorders-goods-delivered2, .myorders-goods-delivered3 {
		border: 2px solid #4CAF50;
		border-radius: 20px;
		padding: 5px 10px;
		color: #4CAF50;
		line-height: 35px;
		white-space: nowrap;
		cursor: pointer;
	}

	.myorders-goods-delete1, .myorders-goods-delete2, .myorders-goods-delete3 {
		display: none;
		border: 2px solid red;
		border-radius: 20px;
		padding: 5px 10px;
		color: red;
		white-space: nowrap;
		cursor: pointer;
	}

	.myorders-goods-delete1:hover, .myorders-goods-delete2:hover, .myorders-goods-delete3:hover {
		color: #fff;
		background: red;
	}
</style>
<div style="margin-top: 10px;"></div>
<h2 style="margin: 0; padding: 10px">Мои заказы</h2>
<div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
<div class="myorders-container">
	<div class="myordes-goods">
		<div class="myordes-goods-img">
			<img src="<?=$layoutPath?>/images/cart/1.jpg">
		</div>
		<div class="myordes-goods-name">
			MIEGOFCE 2016 пуховик зимний женский пальто пуховик новый бренд одежды
		</div>
		<div class="myordes-goods-cost">
			<b>Цена:</b> <span style="color: red; font-weight: bold;">999 999 999</span> сум
		</div>
		<div class="myordes-goods-delivery-price">
			<b>Цена доставки:</b> <span style="font-weight: bold; text-decoration: underline;">10 000</span> сум
		</div>
		<div class="myordes-goods-date">
			<b>Заказ оформлена:</b> 15:35, 02.08.2016
		</div>
		<div class="myordes-goods-delivery-term">
			<b>Cрок доставки:</b> 3 дн.
		</div>
		<div class="myordes-goods-delivery-term1">
			<span class="myorders-goods-delivered1">Товар доставлена</span>
			<span class="myorders-goods-undelivered1">Товар не доставлен в срок</span>
			<span class="myorders-goods-delete1">Удалить заказ</span>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
<div class="myorders-container">
	<div class="myordes-goods">
		<div class="myordes-goods-img">
			<img src="<?=$layoutPath?>/images/cart/1.jpg">
		</div>
		<div class="myordes-goods-name">
			MIEGOFCE 2016 пуховик зимний женский пальто пуховик новый бренд одежды
		</div>
		<div class="myordes-goods-cost">
			<b>Цена:</b> <span style="color: red; font-weight: bold;">999 999 999</span> сум
		</div>
		<div class="myordes-goods-delivery-price">
			<b>Цена доставки:</b> <span style="font-weight: bold; text-decoration: underline;">10 000</span> сум
		</div>
		<div class="myordes-goods-date">
			<b>Заказ оформлена:</b> 15:35, 02.08.2016
		</div>
		<div class="myordes-goods-delivery-term">
			<b>Cрок доставки:</b> 3 дн.
		</div>
		<div class="myordes-goods-delivery-term1">
			<span class="myorders-goods-delivered2">Товар доставлена</span>
			<span class="myorders-goods-undelivered2">Товар не доставлен в срок</span>
			<span class="myorders-goods-delete2">Удалить заказ</span>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
<div class="myorders-container">
	<div class="myordes-goods">
		<div class="myordes-goods-img">
			<img src="<?=$layoutPath?>/images/cart/1.jpg">
		</div>
		<div class="myordes-goods-name">
			MIEGOFCE 2016 пуховик зимний женский пальто пуховик новый бренд одежды
		</div>
		<div class="myordes-goods-cost">
			<b>Цена:</b> <span style="color: red; font-weight: bold;">999 999 999</span> сум
		</div>
		<div class="myordes-goods-delivery-price">
			<b>Цена доставки:</b> <span style="font-weight: bold; text-decoration: underline;">10 000</span> сум
		</div>
		<div class="myordes-goods-date">
			<b>Заказ оформлена:</b> 15:35, 02.08.2016
		</div>
		<div class="myordes-goods-delivery-term">
			<b>Cрок доставки:</b> 3 дн.
		</div>
		<div class="myordes-goods-delivery-term1">
			<span class="myorders-goods-delivered3">Товар доставлена</span>
			<span class="myorders-goods-undelivered3">Товар не доставлен в срок</span>
			<span class="myorders-goods-delete3">Удалить заказ</span>
		</div>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('.myorders-goods-delivered1').click(function(){
			$(this).css({'background' : '#4CAF50', 'color' : "#fff"});
			$('.myorders-goods-undelivered1').css('display', 'none');
			$('.myorders-goods-delete1').css('display', 'inline-block');
		});
		$('.myorders-goods-undelivered1').click(function(){
			$(this).css({'background' : 'red', 'color' : "#fff"});
			$('.myorders-goods-delivered1').css('display', 'none');
		});
		$('.myorders-goods-delivered2').click(function(){
			$(this).css({'background' : '#4CAF50', 'color' : "#fff"});
			$('.myorders-goods-undelivered2').css('display', 'none');
			$('.myorders-goods-delete2').css('display', 'inline-block');
		});
		$('.myorders-goods-undelivered2').click(function(){
			$(this).css({'background' : 'red', 'color' : "#fff"});
			$('.myorders-goods-delivered2').css('display', 'none');
		});
		$('.myorders-goods-delivered3').click(function(){
			$(this).css({'background' : '#4CAF50', 'color' : "#fff"});
			$('.myorders-goods-undelivered3').css('display', 'none');
			$('.myorders-goods-delete3').css('display', 'inline-block');
		});
		$('.myorders-goods-undelivered3').click(function(){
			$(this).css({'background' : 'red', 'color' : "#fff"});
			$('.myorders-goods-delivered3').css('display', 'none');
		});
	});
</script>