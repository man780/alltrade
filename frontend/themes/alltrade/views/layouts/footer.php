<?
use \frontend\themes\alltrade\assets\AppAssets;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

AppAssets::register($this);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Trade</title>
	<link rel="shortcut icon" href="<?=$layoutPath?>/images/favicon.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/profile.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/eshoppage.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/footer-menu.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/help.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/category.css">

	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.footer-gid-h1').click(function(){
				if($(this).next().css('display') == 'none') {
					$(this).css({'background':'#F8D755', 'border-top':'1px solid #FDC689', 'border-bottom':'1px solid #FDC689'});
					$(this).find('.footer-gid-detail').removeClass('down');
					$(this).find('.footer-gid-detail').addClass('up');
					$(this).next().slideDown(500);
					$(this).find('.footer-gid-detail').text('Свернуть');
				}
				else{
					$(this).css({'background':'#f1f1f1', 'border-top':'1px solid #ccc', 'border-bottom':'1px solid #ccc'});
					$(this).find('.footer-gid-detail').removeClass('up');
					$(this).find('.footer-gid-detail').addClass('down');
					$(this).next().slideUp(500);
					$(this).find('.footer-gid-detail').text('Подробнее');
				}
			});
			/*$(".footer-menu-gid").on("click","a", function (event) {
				event.preventDefault();
				var id  = $(this).attr('href'),
				top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 1500);
			});*/

		});
	</script>
</head>
<body>
	<?=$this->render('/layouts/_headerandcategoryeshop', ['layoutPath'=>$layoutPath]);?>
	<div id="container">
		<?=$content?>
		<?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
	</div>
	<?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>
</body>
</html>