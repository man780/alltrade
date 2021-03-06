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

	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/eshop1.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/product.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/slide/css/slider.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/onlineshop.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/profile.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/rating.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/jquery.rating.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/slick/slick-theme.css">

	
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/slick/slick.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/slide/js/jquery.flexslider-min.js"></script>

	<link rel="shortcut icon" href="<?=$layoutPath?>/images/favicon.png" type="image/x-icon">
	<script type="text/javascript">
		$(function(){
			$('.elect').click(function(){
				$(this).toggleClass('elect-red');
				if ($(this).html() == 'Подписаться в магазин') {
					$(this).html('Удалить подписку');
				}
				else {
					$(this).html('Подписаться в магазин');
				}
			});
			var starsAll = 5;//Всего звезд
			var voteAll = 2;//Всего голосов
			var idArticle = 1;//id статьи
			var starWidth = 17;//ширина одной звезды
			var rating = (starsAll/voteAll); //Старый рейтинг
			rating = Math.round(rating*100)/100;
			rating = Math.round(rating*100)/100;
			if(isNaN(rating)){
				rating = 0;
			}
			var ratingResCss = rating*starWidth; //старый рейтинг в пикселях

			$("#ratDone").css("width", ratingResCss);	
			$("#ratStat").html("Рейтинг: <strong>"+rating+"</strong> Голосов: <strong>"+voteAll+"</strong>");
			
			<?php
			$used_ips = $sql["used_ips"]; // вытаскиваем все поле used_ips оно будет содеражать все ip адреса проголосовавших разделенные |
			$ipsArray = explode("|",$used_ips);
			$ip = $_SERVER['REMOTE_ADDR'];
			if(!in_array($ip,$ipsArray)){ //Чтобы предотвратить повторное голосование после обновления, мы просто скрываем функции отвечаюшие за это
			?>
			var coords;
			var stars;	//кол-во звезд при наведении
			var ratingNew;	//Новое количество звезд

			$("#rating").mousemove(function(e){
				var offset = $("#rating").offset();
				coords = e.clientX - offset.left; //текушая координата
				stars = Math.ceil(coords/starWidth); 
				starsCss = stars*starWidth;
				$("#ratHover").css("width", starsCss).attr("title", stars+" из 5");
			});
			$("#rating").mouseout(function(){
				$("#ratHover").css("width", 0);
			});
			$("#rating").click(function(){
				starsNew = stars + starsAll; //новое количество звезд
				voteAll += 1;		
				var ratingNew = starsNew/voteAll;
				ratingNew = Math.round(ratingNew*100)/100;
				var razn = Math.round((rating - ratingNew)*200);//вычислям разницу между новым и старым рейтингом для анимации
				razn = Math.abs(razn);
						
				var total = Math.round(ratingNew*starWidth);
				$.ajax({
					type: "GET",
					url: "action.php",
					data: {"id": idArticle, "rating": stars},
					cache: false,						
					success: function(response){
						if(response == 1){
							var newRat = response+"px";
							$("#ratHover").css("display", "none");
							$("#ratDone").animate({width: total},razn);
							$("#ratBlocks").show();
							$("#ratStat").html("Рейтинг: <strong>"+ratingNew+"</strong> Голосов: <strong>"+voteAll+"</strong>");
						}else{
							$("#ratStat").text(response);
						}							
					}
				});
				return false;
			});	
			<?php	
			}
			?>
		});
	</script>
	<style type="text/css">

	    .slider {
	        width: 95%;
	        margin: 10px auto;
	    }

	    .slick-slide {
	      margin: 0px 5px;
	    }

	    .slick-slide img {
	      width: 100%;
	    }

	    .slick-prev:before,
	    .slick-next:before {
	        color: #fff;
	    }
	</style>
</head>
<body>
	<?=$this->render('/layouts/_headerandcategoryeshop', ['layoutPath'=>$layoutPath]);?>
	<div class="clear"></div>
	<?=$content;?>
	<?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
	<?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>
</body>
</html>
