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

	<link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/registration.css">

</head>
<body>
	<div id="containerreg">	
		<div class="contentreg">
			<p><a href="/"><img src="<?=$layoutPath?>/images/logo.png"></a></p>
            <?=$content?>
			<!--<form action="#" method="POST">
				<p>
					<input type="email" name="email" placeholder="Введите ваш E-mail" style="width: 90%; margin-bottom: 20px; margin-top: 20px" required>
				</p>
				<p>
					<input type="password" name="pass" placeholder="Введите пароль" style="width: 90%; margin-bottom: 20px" required>
				</p>
				<p>
					<input type="submit" style="width: 98%" value="Вход">
				</p>
			</form>-->
		</div>
	</div>
</body>
</html>
