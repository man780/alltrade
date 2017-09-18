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
			
            <?=$content;?>
			<!--<form action="#" method="POST">
				<p>
					<input type="text" name="name" placeholder="ФИО" style="width: 90%; margin-bottom: 20px" required>
				</p>
				<p>
					<input type="email" name="email" placeholder="Введите ваш E-mail" style="width: 90%; margin-bottom: 20px" required>
				</p>
				<p>
					<input type="tel" name="tel" placeholder="Введите ваш телефон (998974401001)" style="width: 90%; margin-bottom: 20px" pattern="[0-9]{12}" required>
				</p>
				<p>
					<input type="password" name="pass" placeholder="Введите пароль" style="width: 90%; margin-bottom: 20px" pattern="[a-zA-Z0-9]{6,}" required>
				</p>
				<p>
					<input type="password" name="repass" placeholder="Введите пароль ещё раз" style="width: 90%;margin-bottom: 20px" pattern="[a-zA-Z0-9]{6,}" required>
				</p>
				<p>
					<input type="submit" style="width: 98%" value="Регистрация">
				</p>
			</form>-->
		</div>
	</div>
</body>
</html>
