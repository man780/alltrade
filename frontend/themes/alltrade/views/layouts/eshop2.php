<?
use \frontend\themes\alltrade\assets\AppAssets;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

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
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/onlineshop.css">
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/eshop2.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/slider.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/philipsslider/css/styleshoose.css">


	<script src="<?=$layoutPath?>/philipsslider/js/modernizr.custom.63321.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/slide/js/jquery.flexslider-min.js"></script>
	<link rel="shortcut icon" href="<?=$layoutPath?>//images/favicon.png" type="image/x-icon">
</head>
<body>

	<?=$this->render('/layouts/_headerandcategoryeshop', ['layoutPath'=>$layoutPath]);?>

	<div class="philipscontainer">

		<div class="philipsmenu">
			<ul>
				<li>Главная</li>
				<li>
					Товары
					<ul class="philipsmenusub">
						<li>Beauty & Health</li>
						<li>Kitchen Appliances</li>
						<li>Home Appliances</li>
						<li>Portable Electronics</li>
					</ul>
				</li>
				<li>Акции</li>
				<li>Лидеры продаж</li>
				<li>Новинки</li>
				<li>Отзывы</li>
				<li>Контакты</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
	    $(function(){	
	        var topPos = $('.philipscontainer').offset().top;
	        $(window).scroll(function() { 
	            var top = $(document).scrollTop();

	            if (top > topPos) {
	              $('.philipscontainer').addClass('fixed');
	            }
	            else {
	            	$('.philipscontainer').removeClass('fixed');
	            }
	        });
	    });
	</script>

	<div class="clear"></div>
	
	<div class="topslideronlineshop">
		<div class="flex-container">
			<div class="flexslider">
				<ul class="slides">					
					<li>
						<img src="<?=$layoutPath?>/images/slide/1.jpg"/>
					</li>
					
					<li>
						<img src="<?=$layoutPath?>/images/slide/2.jpg"/>
					</li>

					<li>
						<img src="<?=$layoutPath?>/images/slide/3.jpg"/>
					</li>
				</ul>
			</div>
		</div>
		<script>
			$(document).ready(function () {

				$('.flexslider').flexslider({
					animation: 'fade',
					controlsContainer: '.flexslider'
				});
				
			});
		</script>
	</div>


	<div id="container">
		<div class="clear"></div>
		<div style="margin-top: 10px;"></div>
		<div class="philipscontent">
			<table cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td style="padding-right: 10px;">
						<img src="images/1.jpg" style="max-width: 100%;">
					</td>
					<td style="padding-right: 10px;">
						<img src="images/2.jpg" style="max-width: 100%">
					</td>
					<td>
						<img src="images/3.jpg" style="max-width: 100%">
					</td>
				</tr>
			</table>
		</div>
		
		<div class="clear"></div>

		<div id="mi-slider" class="mi-slider">
			<ul>
				<li><a href="#"><img src="philipsslider/images/1.1.jpg" alt="img01"><h4>Бритва</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/2.1.jpg" alt="img02"><h4>Наушники</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/3.1.jpg" alt="img03"><h4>Bodygroom</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/4.1.jpg" alt="img04"><h4>Электробритва</h4></a></li>
			</ul>
			<ul>
				<li><a href="#"><img src="philipsslider/images/1.1.jpg" alt="img01"><h4>Бритва</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/2.1.jpg" alt="img02"><h4>Наушники</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/3.1.jpg" alt="img03"><h4>Bodygroom</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/4.1.jpg" alt="img04"><h4>Электробритва</h4></a></li>
			</ul>
			<ul>
				<li><a href="#"><img src="philipsslider/images/5.1.jpg" alt="img09"><h4>Наушник</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/6.1.jpg" alt="img10"><h4>Наушники</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/7.1.jpg" alt="img11"><h4>Светильник</h4></a></li>
				<li><a href="#"><img src="philipsslider/images/8.1.jpg" alt="img09"><h4>Светильник</h4></a></li>
			</ul>
			<nav>
				<a href="#">ХИТЫ</a>
				<a href="#">РЕКОМЕНДУЕМ</a>
				<a href="#">АКЦИЯ</a>
			</nav>
		</div>
			
		<script type="text/javascript" src="<?=$layoutPath?>/philipsslider/js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$('#mi-slider').catslider();

			});
		</script>
		
		<div class="philipsphoto">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td style="padding-right: 10px;" rowspan="2">
						<img src="images/photo/1.jpg" style="max-width: 100%;">
					</td>
					<td valign="top">
						<img src="images/photo/2.jpg" style="max-width: 100%;">
					</td>
				</tr>
				<tr>
					<td valign="bottom">
						<img src="images/photo/3.jpg" style="max-width: 100%;">
					</td>
				</tr>
			</table>
		</div>

		<div class="clear"></div>
		<div style="margin-top: 15px;"></div>

		<div class="philipsproduct">
			<h2>СПЕЦИАЛЬНЫЕ РЕКОМЕНДАЦИИ</h2>
			<div class="clear"></div>
			<div style="margin-top: 15px;"></div>
			<ul style="margin: 0; padding: 0;">

				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/1.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/2.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/3.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/4.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/5.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/6.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/7.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/8.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/7.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/2.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/3.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				<a href="#" class="a">
				<li class="tovarphilips">
					<p style="text-align: center;"><img class="philipsimg" src="images/product/4.jpg"></p>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p>Philips Click&Style бритва и стайлер 2-в-1 YS536/71</p>
						<a href="buy"><p style="text-align: center; background: #3670b3; padding: 10px; color: #fff; margin-top: 10px; font-size: 18px;">Купить</p></a>
					</div>
				</li>
				</a>
				
			</ul>

		</div>
		
		<div class="clear"></div>



        <?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
	</div>
	<?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>
</body>
</html>

