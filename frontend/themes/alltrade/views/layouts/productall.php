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
	<link rel="shortcut icon" href="<?=$layoutPath?>/images/favicon.png" type="image/x-icon">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/product.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/profile.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/category.css">
	
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/jquery.input.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/js/isotope.pkgd.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/product/css/fancybox.css" media="screen" />
	<script type="text/javascript" src="<?=$layoutPath?>/product/js/js_jquery.js"></script> 
	<script type="text/javascript" src="<?=$layoutPath?>/product/js/core_ajaxconst.php"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/product/js/jquery.selectbox.js"></script>
	<script type="text/javascript" src="<?=$layoutPath?>/product/js/js_scripts.js"></script>

	<script type="text/javascript">
		/*function setBigImage(foto) {
			$("#adpdp14").attr('href', $(foto).parent('.it').children('a').attr('href'));
		  document.getElementById("dp14").src = foto.src;
		}*/
	</script>


	
	<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
</head>
<body>


	<?//include('blocks/headerandcategory.php');?>
	<?=$this->render('/layouts/_headerandcategory', ['layoutPath'=>$layoutPath]);?>


	<div id="container">	
	
		<?=$content?>
		
		<?//include('blocks/footer.php')?>
		<?=$this->render('/layouts/_footerads', ['layoutPath'=>$layoutPath]);?>

	</div>
	<?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>

</body>
</html>
