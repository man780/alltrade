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
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/category.css">
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/cart.css">
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/profile.css">

    <script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>


    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/product/css/fancybox.css" media="screen" />
    <script type="text/javascript" src="<?=$layoutPath?>/product/js/js_jquery.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/product/js/core_ajaxconst.php"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/product/js/jquery.selectbox.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/product/js/js_scripts.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.profile-active-h1').click(function(){
                //alert('active');
                $('.profile-inactive').css('display', 'none');
                $('.profile-active').css('display', 'block');
                $(this).addClass('profile-act');
                $('.profile-inactive-h1').removeClass('profile-act');
            });
            $('.profile-inactive-h1').click(function(){
                //alert('inactive');
                $('.profile-active').css('display', 'none');
                $('.profile-inactive').css('display', 'block');
                $(this).addClass('profile-act');
                $('.profile-active-h1').removeClass('profile-act');
            });
            $('.profile-these-h1').click(function(){
                //alert('inbox');
                $('.profile-outbox').css('display', 'none');
                $('.profile-inbox').css('display', 'block');
            });
            $('.profile-sent-h1').click(function(){
                //alert('outbox');
                $('.profile-inbox').css('display', 'none');
                $('.profile-outbox').css('display', 'block');
            });
            $('.profile-menu-ads').click(function(){
                $('.profile-settings').css('display', 'none');
                $('.profile-message').css('display', 'none');
                $('.profile-ad').css('display', 'block');
                $('.profile-header-h1').html('Объявления');
                $('.profile-header-p').html('Здесь вы найдёте ваши активные и архивные объявления');
            });
            $('.profile-menu-message').click(function(){
                $('.profile-ad').css('display', 'none');
                $('.profile-settings').css('display', 'none');
                $('.profile-message').css('display', 'block');
                $('.profile-header-h1').html('Сообщения');
                $('.profile-header-p').html('Здесь вы найдёте ответы на свои объявления, а также отосланные вами сообщения');
            });
            $('.profile-menu-setting').click(function(){
                $('.profile-message').css('display', 'none');
                $('.profile-ad').css('display', 'none');
                $('.profile-settings').css('display', 'block');
                $('.profile-header-h1').html('Настройки');
                $('.profile-header-p').html('Здесь вы можете изменять настройки своей учётной записи');
            });

        });
        function setBigImage(foto) {
            $("#adpdp14").attr('href', $(foto).parent('.it').children('a').attr('href'));
            document.getElementById("dp14").src = foto.src;
        }
    </script>



    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
</head>
<body>

<?=$this->render('/layouts/_headerandcategory', ['layoutPath'=>$layoutPath]);?>
    <div style="margin-top: 10px;"></div>
	<div id="container">
		
		<div id="content1">
			<?=$content;?>
		</div>
		
		<div class="clear"></div>
        <?=$this->render('/layouts/_footerads', ['layoutPath'=>$layoutPath]);?>

	</div>
    <?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>
</body>
</html>
