<?
use \frontend\themes\alltrade\assets\AppAssets;
//use \backend\models\Champs;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
use backend\models\Category;

AppAssets::register($this);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>All Trade</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/product.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/slide/css/slider.css">

	
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/slide/js/jquery.flexslider-min.js"></script>

	<link rel="shortcut icon" href="<?=$layoutPath?>/images/favicon.png" type="image/x-icon">
</head>
<body>
	
	<?//include('blocks/header.php');?>
    <?=$this->render('/layouts/_header', ['layoutPath'=>$layoutPath]);?>

	<div id="container">	
		
		<div id="header">
			
			<div class="clear"></div>

				<div style="margin-top: 10px; border-bottom: 1px solid #ddd;"></div>

			<!--<div id="topcenter">-->
					
				<div class="topheaderlink">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; width: 220px;">
								<p style="font-size: 13px;">Категории</p>
							</td>
							<td colspan="5" style="border-bottom: 1px solid #ddd; padding-left: 10px;">
								<p>
									<a href="#" class="a">Горящие товары</a>
									<a href="#" class="a apadding">Молл.Доставка из Узбекистана</a>
									<a href="#" class="a apadding">iTao</a>
									<a href="#" class="a apadding">Бренд-фокус</a>
									<a href="#" class="a apadding">Hi-TechКоллекции</a>
									<a href="#" class="a apadding">Мода</a>
									<a href="#" class="a apadding">Бестселлеры</a>
								</p>
							</td>
						</tr>
					</table>
				</div>
				
				<div style="max-width: 240px; float: left; position: relative;">
					<div class="leftmenuindex">
                        <?
                        $categories = Category::getCategories4F(1);
                        //vd($categories);
                        ?>
						<?//include('blocks/category.php')?>
                        <?=$this->render('/layouts/_category', ['layoutPath'=>$layoutPath, 'categories' => $categories]);?>
					</div>
				</div>

            <?//include('blocks/_slide.php')?>
            <?=$this->render('/layouts/_slide', ['layoutPath'=>$layoutPath]);?>
            <?//include('blocks/banner.php')?>
            <?=$this->render('/layouts/_banner', ['layoutPath'=>$layoutPath]);?>

						


				<div class="clear"></div>
				
				<p class="bannerbottom"><img src="<?=$layoutPath?>/images/banner/1.2.jpg"></p>				
			<!--</div>-->

			<div id="topbottom">
				<div class="topbottomdiv">
					<a href="#" class="a">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<img src="<?=$layoutPath?>/images/header/1.png">
							</td>
							<td>
								<p class="topbottomp">Как сделать заказ</p>
							</td>
						</tr>
					</table>
					</a>
				</div>
				<div class="topbottomdiv">
					<a href="#" class="a">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<img src="<?=$layoutPath?>/images/header/2.png">
							</td>
							<td>
								<p class="topbottomp">Как оплатить товар</p>
							</td>
						</tr>
					</table>
					</a>
				</div>
				<div class="topbottomdiv">
					<a href="#" class="a">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<img src="<?=$layoutPath?>/images/header/3.png">
							</td>
							<td>
								<p class="topbottomp">Доставка</p>
							</td>
						</tr>
					</table>
					</a>
				</div>
				<div class="topbottomdiv">
					<a href="#" class="a">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<img src="<?=$layoutPath?>/images/header/4.png">
							</td>
							<td>
								<p class="topbottomp">Гарантии</p>
							</td>
						</tr>
					</table>
					</a>
				</div>
				<div class="clear"></div>
				<div style="margin-bottom: 15px;"></div>
			</div>
		</div>
		


		<div id="content">
			<div id="brands">
				<div class="brandstop">
					<p class="brandsp"><a href="#" style="color: red; text-decoration: none;">МОЛЛ. Доставка из Узбекистана</a></p>
					<table class="barandstoptable" cellpadding="0" cellspacing="0">
						<tr>
							<td><a href="#"><img src="<?=$layoutPath?>/images/brands/1.png" width="30"></a></td>
							<td style="padding-right: 20px; padding-left: 10px"><a href="#" class="a">Реальные<br>бренды</a></td>
							<td><a href="#"><img src="<?=$layoutPath?>/images/brands/2.png" width="30"></a></td>
							<td style="padding-right: 20px; padding-left: 10px"><a href="#" class="a">Экспресс<br>доставка</a></td>
							<td><a href="#"><img src="<?=$layoutPath?>/images/brands/3.png" width="30"></a></td>
							<td style="padding-left: 10px"><a href="#" class="a">Удобный<br>возврат</a></td>
						</tr>
					</table>	
				</div>
				
				<div class="clear"></div>
				<div style="border-bottom: 1px solid red; padding-top: 15px;"></div>
				



				<div class="brandscenter">
					
					<div class="brandscenter1">
						<div class="brandscenter11"><a href="#"><img src="<?=$layoutPath?>/images/brands/1.jpg"></a></div>
						<div class="brandscenter12">
							<a href="#" class="a">
								<p style="text-align: center;"><a href="#"><img src="<?=$layoutPath?>/images/brands/1.1.jpg" width="100%" style="max-width: 200px;"></a></p>
								<p style="text-align: center;"><a href="#"><img src="<?=$layoutPath?>/images/brands/1.2.png" width="100%" style="max-width: 100px"></a></p>
								<table style="width: 100%">
									<tr>
										<td>
											<p>1 000 000 сум</p>
											<p style="text-decoration: line-through; font-size: 80%;">1 200 000 сум</p>													
										</td>
										<td>
											<p style="padding: 5px 10px; background-color: red; float: right; color: #fff;">-20%</p>
										</td>
									</tr>
								</table>
							</a>
						</div>
					</div>

					<div class="brandscenter2" style="">
						
						<div class="brandscenter21">
							<a href="#" class="a">
							<p style="text-align: center;"><img class="brandscenter21img1" src="<?=$layoutPath?>/images/brands/2.jpg"></p>
							<p style="text-align: center;"><img class="brandscenter21img2" src="<?=$layoutPath?>/images/brands/2.1.png"></p>
							<p style="text-align: center;">Одежда и аксессуары</p>
							<p style="text-align: center; font-size: 80%;">Европейские фасоны и качество</p>
							</a>
						</div>

						<div class="brandscenter22">
							<div>
								<a href="#" class="a">
									<table cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td><p><img src="<?=$layoutPath?>/images/brands/2.1.jpg" width="100%" style="max-width: 150px;"></p></td>
											<td>
												<p><img src="<?=$layoutPath?>/images/brands/2.2.png" width="100%" style="max-width: 150px;"></p>
												<p>Бытовая техника</p>
												<p>Всё для дома и дачи</p>
											</td>
										</tr>
									</table>
								</a>
							</div>
							<div>
								<a href="#" class="a">
									<table>
										<tr>
											<td><p><img src="<?=$layoutPath?>/images/brands/2.2.jpg" width="100%" style="max-width: 150px;"></p></td>
											<td>
												<p><img src="<?=$layoutPath?>/images/brands/2.3.png" width="100%" style="max-width: 100px;"></p>
												<p>Аксессуары</p>
												<p>Скидки на бестселлеры</p>
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>

					</div>

				</div>


				<div class="clear"></div>
				<div style="border-bottom: 1px solid #ddd; margin-top: 15px;"></div>

			</div>

			<div class="clear"></div>
			<div style="margin-top: 15px;">

				<div class="brandsdiv1">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td style="padding-right: 15px; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; padding-bottom: 15px">
								<p style="float: left;">Международные бренды</p>
								<p style="font-size: 90%; float: right;"><a href="#" class="a">Больше</a></p>
							</td>
						</tr>
						<tr>
							<td style="padding-top: 5px; padding-right: 15px; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; padding-bottom: 5px">
								<p><img src="<?=$layoutPath?>/images/brands/brands/1.1.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/1.2.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/1.3.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/1.4.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/1.5.jpg" class="brandsdivimg"></p>
							</td>
						</tr>
					</table>
				</div>
				
				<div class="brandsdiv2">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td style="border-bottom: 1px solid #ddd; padding-bottom: 15px">
								<p style="float: left; padding-left: 15px;">Китайские бренды</p>
								<p style="font-size: 90%; float: right;"><a href="#" class="a">Больше</a></p>
							</td>
						</tr>
						<tr>
							<td style="padding-top: 5px; padding-left: 15px; border-bottom: 1px solid #ddd; padding-bottom: 5px">
								<p><img src="<?=$layoutPath?>/images/brands/brands/2.1.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/2.2.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/2.3.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/2.4.png" class="brandsdivimg"></p>
								<p><img src="<?=$layoutPath?>/images/brands/brands/2.5.png" class="brandsdivimg"></p>
							</td>
						</tr>
					</table>
				</div>

			</div>

			<div class="clear"></div>
			<div style="margin-top: 10px"></div>
			<div id="discountedProducts">
				<p class="brandsp"><a href="#" style="color: red; text-decoration: none;">Горящие товары</a></p>
				<div class="clear"></div>
				<div style="border-bottom: 1px solid red; padding-top: 10px; margin-bottom: 15px;"></div>
				<div class="discountedProductsdiv1">
					<table width="100%" cellpadding="0">
						<tr>
							<td>
								<table width="100%">
									<tr>
										<td rowspan="3" style="border: 1px solid #ddd; padding-left: 10px; position: relative;">
										<a href="#" class="a">
											<p><img class="discountedProductsdiv1img1" src="<?=$layoutPath?>/images/discountedProducts/1.jpg"></p>
											<p>REALER мужской бумажник из<br> натуральной кожи</p>
											<p style="margin-top: 15px"><span style="color: #e62e04">US $16.61</span> / шт.</p>
											<p style="text-decoration: line-through; font-size: 80%;">US $43.71 / шт.</p>
											<p style="margin-top: 15px">С доставкой</p>
											<div class="discount"><p class="discountp">-50%</p></div>
										</a>
										</td>
										<td style="border: 1px solid #ddd; padding-left: 10px; position: relative;">
											<a href="#" class="a">
											<table>
												<tr>
													<td valign="bottom">
														<div class="discountedProductsdiv1div">
															<p style="margin-top: 15px"><span style="color: #e62e04">US $2.04</span> / шт.</p>
															<p style="text-decoration: line-through; font-size: 80%;">US $5.99 / шт.</p>
															<p style="margin-top: 15px" class="discountedProductsdiv1p">С доставкой</p>
														</div>
													</td>
													<td width="60%">
														<img class="discountedProductsdiv1img2" src="<?=$layoutPath?>/images/discountedProducts/1.1.jpg">
													</td>
												</tr>
											</table>
											<div class="discount"><p class="discountp">-50%</p></div>
											</a>
										</td>
									</tr>
									<tr>
										<td style="border: 1px solid #ddd; padding-left: 10px; position: relative;">
											<a href="#" class="a">
											<table>
												<tr>
													<td valign="bottom">
														<div class="discountedProductsdiv1div">
															<p style="margin-top: 15px"><span style="color: #e62e04">US $4.61</span> / шт.</p>
															<p style="text-decoration: line-through; font-size: 80%;">US $6.71 / шт.</p>
															<p style="margin-top: 15px" class="discountedProductsdiv1p">С доставкой</p>
														</div>
													</td>
													<td width="60%">
														<img class="discountedProductsdiv1img2" src="<?=$layoutPath?>/images/discountedProducts/1.2.jpg">
													</td>
												</tr>
											</table>
											<div class="discount"><p class="discountp">-50%</p></div>
											</a>
										</td>
									</tr>
									<tr>
										<td style="border: 1px solid #ddd; padding-left: 10px; position: relative;">
											<a href="#" class="a">
											<table>
												<tr>
													<td valign="bottom">
														<div class="discountedProductsdiv1div">
															<p style="margin-top: 15px"><span style="color: #e62e04">US $1.61</span> / шт.</p>
															<p style="text-decoration: line-through; font-size: 80%;">US $2.71 / шт.</p>
															<p style="margin-top: 15px" class="discountedProductsdiv1p">С доставкой</p>
														</div>
													</td>
													<td width="60%">
														<img class="discountedProductsdiv1img2" src="<?=$layoutPath?>/images/discountedProducts/1.3.jpg">
													</td>
												</tr>
											</table>
											<div class="discount"><p class="discountp">-50%</p></div>
											</a>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>

				<div class="discountedProductsdiv2">
					<table width="100%" cellpadding="0">
						<tr>
							<td>
								<table width="100%">
									<tr>
										<td rowspan="2" style="border: 1px solid #ddd; padding-left: 10px; position: relative;" height="471">
											<a href="#" class="a">
											<p><img src="<?=$layoutPath?>/images/discountedProducts/2.jpg" width="80%"></p>
											<p>Женская винтажная рубашка<br> с длинным рукавом</p>
											<p style="margin-top: 15px"><span style="color: #e62e04">US $9.23</span> / шт.</p>
											<p style="text-decoration: line-through; font-size: 80%;">US $20.71 / шт.</p>
											<p style="margin-top: 15px">С доставкой</p>
											<div class="discount"><p class="discountp">-50%</p></div>
											</a>
										</td>
										<td style="border: 1px solid #ddd; padding-left: 10px; position: relative;">
											<a href="#" class="a">
											<table>
												<tr>
													<td>
														<p style="margin-top: 15px"><span style="color: #e62e04">US $2.04</span> / шт.</p>
														<p style="text-decoration: line-through; font-size: 80%;">US $5.99 / шт.</p>
														<p style="margin-top: 15px">С доставкой</p>
													</td>
													<td  width="60%">
														<img src="<?=$layoutPath?>/images/discountedProducts/2.1.jpg" class="discountedProductsdiv1img2">
													</td>
												</tr>
											</table>
											<div class="discount"><p class="discountp">-50%</p></div>
											</a>
										</td>
									</tr>
									<tr>
										<td style="border: 1px solid #ddd; padding-left: 10px; position: relative;">
											<a href="#" class="a">
											<table>
												<tr>
													<td>
														<p style="margin-top: 15px"><span style="color: #e62e04">US $4.61</span> / шт.</p>
														<p style="text-decoration: line-through; font-size: 80%;">US $6.71 / шт.</p>
														<p style="margin-top: 15px">С доставкой</p>
													</td>
													<td  width="60%">
														<img src="<?=$layoutPath?>/images/discountedProducts/2.2.jpg" class="discountedProductsdiv1img2">
													</td>
												</tr>
											</table>
											<div class="discount"><p class="discountp">-50%</p></div>
											</a>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
				
			</div>

			<div class="clear"></div>
			<div style="margin-top: 10px"></div>
			<div class="buyersSay">
				<p class="brandsp"><a href="#" style="color: red; text-decoration: none;">Покупатели говорят</a></p>
				<div class="clear"></div>
				<div style="border-bottom: 1px solid red; padding-top: 10px; margin-bottom: 15px;"></div>
				
				<ul style="margin: 0; padding: 0;">
						
					<a href="#" class="a">
					<li class="buyersSayblock">
						<p style="text-align: center;"><img class="buyersSayimg" src="<?=$layoutPath?>/images/buyersSay/1.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<p style="padding-left: 10px">Alina Esman</p>
							<p style="text-align: left; margin-top: 10px; padding-left: 10px; font-size: 80%">ПОДБОРКА КРАСИВЫХ СВИТЕРОВ</p>
							<p class="brandssm">Смотреть</p>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="buyersSayblock">
						<p style="text-align: center;"><img class="buyersSayimg" src="<?=$layoutPath?>/images/buyersSay/2.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<p style="padding-left: 10px">Вишня-калдышня</p>
							<p style="text-align: left; margin-top: 10px; padding-left: 10px; font-size: 80%">ПОДБОРКА ШЛЯП С ПОЛЯМИ. Приветствую, наверное, многие заметили, что я люблю головные уборы, а они, по ходу, любят меня)). Для любительниц шляп с широкими полями осенне-зимний сезон 15/16 и предстоящая</p>
							<p class="brandssm">Смотреть</p>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="buyersSayblock">
						<p style="text-align: center;"><img class="buyersSayimg" src="<?=$layoutPath?>/images/buyersSay/3.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<p style="padding-left: 10px">Julia Kamysh</p>
							<p style="text-align: left; margin-top: 10px; padding-left: 10px; font-size: 80%">5 МОИХ ЛУЧШИХ ПОКУПОК 2015 ГОДА. #2015_bestlook<br>Люблю эти вещи :).</p>
							<p class="brandssm">Смотреть</p>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="buyersSayblock">
						<p style="text-align: center;"><img class="buyersSayimg" src="<?=$layoutPath?>/images/buyersSay/4.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<p style="padding-left: 10px">Дана_Р.</p>
							<p style="text-align: left; margin-top: 10px; padding-left: 10px; font-size: 80%">ПОДБОРКА ВЕСЕННИХ<br>СТЕГАННЫХ КУРТОК<br>Не за горами весна и я нахожусь в поиске новой интересной, легкой и удобной курточки, поделюсь тем, что мне понравилось, возможно понравится и вам).</p>
							<p class="brandssm">Смотреть</p>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="buyersSayblock">
						<p style="text-align: center;"><img class="buyersSayimg" src="<?=$layoutPath?>/images/buyersSay/5.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<p style="padding-left: 10px">JazzGirlsAround</p>
							<p style="text-align: left; margin-top: 10px; padding-left: 10px; font-size: 80%">Привет! Сегодня в рубрике ВЕЩЬ ДНЯ - рюкзак известного лейбла Grafea. История бренда и ссылки на реплики внутри поста.</p>
							<p class="brandssm">Смотреть</p>
						</div>
					</li>
					</a>

				</ul>
			</div>
					



			<div class="clear"></div>
			<div style="margin-top: 10px"></div>
			
			<div id="qualityMark">
				<p class="brandsp"><a href="#" style="color: red; text-decoration: none;">Знак качества</a></p>
				<div class="clear"></div>
				<div style="border-bottom: 1px solid red; padding-top: 10px; margin-bottom: 15px;"></div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Все</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Молл</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Для неё</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Для него</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Детям</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Hi-Tech</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Аксессуары</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Компьютеры</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Авто</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Сумки и обувь</a>
				</div>
				<div class="qualityMarkdiv">
					<a href="#" class="a back">Дом и сад</a>
				</div>
				
				<div class="clear"></div>
				<div style="margin-top: 20px;"></div>
				
				<ul style="margin: 0; padding: 0;">
					
					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/1.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/2.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/3.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/4.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/5.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/6.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/7.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/8.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/9.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>

					<a href="#" class="a">
					<li class="tovar">
						<p style="text-align: center;"><img class="qualityMarkimg" src="<?=$layoutPath?>/images/qualityMark/10.jpg"></p>
						<div style="padding-left: 10px; padding-right: 10px;">
							<table width="100%" style="margin-top: 15px;">
								<tr>
									<td><p style="font-size: 120%">US $3.00</p><p style="font-size: 80%; text-decoration: line-through;">US $3.00</p></td>
									<td><p style="text-align: right;">1233 Заказы</p></td>
								</tr>
							</table>
						</div>
					</li>
					</a>
				</ul>
				<div class="clear"></div>
				<div style="margin-top: 10px; float: right; border-bottom: 1px solid #ddd;">
					<a href="#" class="qualityMarklink">Смотреть все</a>
				</div>

				<div class="clear"></div>
				<div style="margin-top: 20px;"></div>
			</div>

		</div>
		
		<?//include('blocks/footer.php')?>
        <?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
	</div>
	<?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>
</body>
</html>
