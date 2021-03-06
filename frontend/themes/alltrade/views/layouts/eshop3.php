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
	<link rel="shortcut icon" href="<?=$layoutPath?>/images/favicon.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/eshop3.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/category.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/product.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/onlineshop.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/slider.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/profile.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/rating.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/popup.css">

	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/philipsslider/css/styleshoose.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/slick/slick-theme.css">


	<script src="<?=$layoutPath?>/philipsslider/js/modernizr.custom.63321.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/js/popup.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/slick/slick.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/slide/js/jquery.flexslider-min.js"></script>

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
	<?=$content;?>
	<div id="container">
		<?=$this->render('/layouts/_footer', ['layoutPath'=>$layoutPath]);?>
	</div>
	<?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>
</body>
</html>

