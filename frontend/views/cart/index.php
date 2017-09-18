<?
	$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
	
	use yii\helpers\Url;
	use frontend\models\Cart;
	use backend\models\Companies;
	use frontend\models\Goods;

	$IDuser = \Yii::$app->user->id;
	$countCart = Cart::find()->where(['id_user' => $IDuser])->count();
	$carts = Cart::find()->where(['id_user' => $IDuser])->orderBy('date DESC')->asArray()->all();
	$cartsNew = [];
	$i=0;
	rasul:
	$carts = $carts;
	if ($carts) {
		foreach ($carts as $key1 => $cart1) {
			$idGood = $cart1['id_shop'];
			$cartsNew[$i] = $cart1;
			unset($carts[$key1]);
			$i++;
			foreach ($carts as $key2 => $cart2) {
				if ($idGood == $cart2['id_shop']) {
					$cartsNew[$i] = $cart2;
					unset($carts[$key2]);
					$i++;
				}
			}
			goto rasul;
		}
	}
	/*foreach ($cartsNew as $key => $cartsN) {
		echo 'id: '.$cartsN['id'].' date: '.$cartsN['date'].' idgood: '.$cartsN['id_good'].' idShop: '.$cartsN['id_shop'];
		echo "<br>";
	}*/
?>
<div style="margin-top: 10px;"></div>
<div id="content">
	<h4 style="margin: 0; padding: 10px 5px;">Ваша корзина <span style="font-size: 80%">(<?=$countCart;?> товара(ов))</span></h4>
	<div class="clear"></div>
	
	<?
		$allCostCompany = 0;
		$i = 0;
		$j = 0;
		$allCost = 0;
		foreach ($cartsNew as $key => $cart):
			$id = $cart['id'];
			//vd($id, false);
			$model = Goods::find()->where(['id' => $cart['id_good']])->one();
			$calc = $model->cost*$cart['count'];
			$allCostCompany = $allCostCompany + $calc;
			if ($i == 0) {
				$idShop = $cart['id_shop'];
				$newIdShop = true;
				$i++;
				$count = Cart::find()->where(['id_shop' => $cart['id_shop'], 'id_user' => $IDuser])->count();
				$j = 0;
			}
			elseif ($idShop == $cart['id_shop'] and $i > 0) {
				$newIdShop = false;
			}
			else {
				$idShop = $cart['id_shop'];
				$newIdShop = true;
				$count = Cart::find()->where(['id_shop' => $cart['id_shop'], 'id_user' => $IDuser])->count();
				$j = 0;
			}
			//vd($count, false);
	?>
		<div class="cartproduct">
			<?
				if ($newIdShop):
					$company = Companies::find()->where(['id' => $idShop])->one();
					//vd($company, false);
			?>
				<div class="cartprodaves">
					Магазин: <a href="<?=Url::toRoute(['/eshop/shop', 'id' => $company->id]);?>" class="a"><?=$company->name?></a>
				</div>
				<div class="cartprodaves">
					<span style="color: green"><b>Online</b></span> или <span style="color: red"><b>Offline</b></span>
				</div>
				<div class="cartprodaves">
					<span class="order1" style="cursor: pointer; color: red">Отправить сообщение</span>
		            <div class="product-popup">
		                <div class="product-overlay"></div>
		                <div class="product-form-popup">
		                    <div class="popup-content">
		                        <h4>Чтобы оставить сообщения авторизуйтесь  <?=$company->id?></h4>
		                        <p><a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a></p>
		                        <h4>Если у вас нет аккаунта зарегистрируйтесь</h4>
		                        <p><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></p>
		                        <div style="border-bottom: 1px solid red;"></div>
		                        <h4>Отправить сообщение</h4>
		                        <form action="" method="POST">
		                            <textarea style="width: 98%; height: 80px; resize: none"></textarea>
		                            <input type="submit">
		                        </form>
		                    </div>
		                    <div class="product-close"></div>
		                </div>
		            </div>
				</div>
				<div class="clear"></div>
				<div class="cartdivdiv-800"></div>
			<?
				endif;
				//vd($cart, false);
				$model = Goods::find()->where(['id' => $cart['id_good']])->one();
				$imageArr = json_decode($model->image, true);
				if(is_array($imageArr)){
				    $image = '/images/goods/'.$model->id.'/'.$imageArr['min'];
				}else{
				    $image = '/images/placeHolder.png';
				}
				$company = Companies::find()->where(['id' => $idShop])->one();
				$j++;
			?>
			<a href="<?=Url::toRoute(['/goods/view', 'id' => $model->id]);?>" style="color: #000; text-decoration: none;">
				<div class="cartdiv-photo">
					<p class="cartdivname">
						Фото
					</p>
					<p class="category-list-pp">
						<img src="<?=$image?>" style="max-width: 100%; max-height: 100%; vertical-align: middle;">
					</p>
				</div>
				<div class="cartdiv-desc">
					<p class="cartdivname">
						Наименование товара и описание
					</p>
					<p>
						<p class="cartpdescription"><?=$model->name?></p>
						<span class="cartimgspan">Цвет: </span><?=$cart['color']?><br>
						<span class="cartimgspan">Размер: </span><?=$cart['size']?><br>
						<span class="cartimgspan">Отправка из: </span><?=$company->address?>
					</p>
				</div>
				<div class="clear-820"></div>
				<div class="cartdiv1">
					<p class="cartdivname goods-count-name">
						Количество
					</p>
					<p class="goods-count">
						<?=$cart['count'];?>
					</p>
				</div>
				<div class="cartdiv">
					<p class="cartdivname">
						Цена
					</p>
					<div>
					<? if ($model->discount): ?>
						<p class="cartcostright">
							<span><?=number_format($model->cost, '0', ',', ' ');?> <?=($model->id_currency == 1)?'сум':'у.е.';?> / шт.</span>
						</p>
						<p class="cartcostleft">
							<span style="text-decoration: line-through; font-size: 80%;"><?=number_format($model->old_cost, '0', ',', ' ');?> <?=($model->id_currency == 1)?'сум':'у.е.';?> / шт.</span>
							<span style="background: red; color: #fff; padding: 0px 2px; margin-left: 3px;">-<?=$model->discount?>%</span>
						</p>
					<? else: ?>
						<p class="cartcostright">
							<span><?=number_format($model->cost, '0', ',', ' ');?> <?=($model->id_currency == 1)?'сум':'у.е.';?> / шт.</span>
						</p>
					<? endif; ?>
					</div>
				</div>
				<div class="cartdiv-delivery">
					<p class="cartdivname-delivery">
						Условия доставки:
					</p>
					<p>
						<span class="cartimgspan">Срок доставки: </span>15-60 дн.<br>
						<span class="cartimgspan">Обработка заказа: </span>1 дн.
					</p>
				</div>
			</a>
			<div class="clear"></div>
			<p style="text-align: right; padding: 20px;">
				<a href="javascript:void(0)" class="qualityMarklink" data-idgoodcart="<?=$id?>" data-iduser="<?=$IDuser?>">Удалить</a>
			</p>

			<?
				if ($j == $count):
			?>
				<p class="cartallcost">
					<!-- <span class="cartimgspan">Стоимость: </span><span class="cartimgspancost">150 000 сум</span><br> -->
					<!-- <span class="cartimgspan">Стоимость доставки: </span><span class="cartimgspancost">5 000 сум</span><br> -->
					<span class="cartimgspan">Общая стоимость: </span><span class="cartimgspancost"><?=number_format($allCostCompany, '0', ',', ' ');?> сум</span><br>
				</p>
				<p style="text-align: right; padding: 20px;">
					<a href="<?=Url::toRoute(['/cart/checkout', 'id_company' => $cart['id_shop'], 'id_user' => $IDuser]);?>" class="qualityMarklink">Оформить заказ</a>
				</p>
			<?
				$allCost = $allCost + $allCostCompany;
				$allCostCompany = 0;
				endif;
			?>

		</div>
	<?
		endforeach;
	?>	



	<p style="text-align: right; padding-right: 20px; font-size: 90%; padding-bottom: 20px;">
		<!-- <span class="cartimgspan">Стоимость(2 товара): </span>300 000 сум<br>
		<span class="cartimgspan">Стоимость доставки: </span>10 000 сум<br> -->
		<span class="cartimgspan" style="font-size: 130%; color: red;">Общая сумма: <?=number_format($allCost, '0', ',', ' ');?> сум</span>
	</p>
</div>

<script type="text/javascript">
	$(function(){
		$('.qualityMarklink').click(function(){
			var idgoodcart = $(this).attr('data-idgoodcart');
			var iduser = $(this).attr('data-iduser');
			$.ajax({
	            url: '/cart/delete',
	            type: 'get',
	            data: {
	            	id_user: iduser,
	            	id_goodcart: idgoodcart
	            },
	            success: function (data) {
	                if(data){
	                    location.reload();
	                }
	            }
	        });
		});
	});
</script>