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
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/product.css">
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/profile.css">
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?=$layoutPath?>/css/category.css">

    <script type="text/javascript" src="<?=$layoutPath?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?=$layoutPath?>/js/js.js"></script>
    <link rel="shortcut icon" href="<?=$layoutPath?>/images/favicon.png" type="image/x-icon">
</head>
<body>
    <?=$this->render('/layouts/_headerandcategory', ['layoutPath'=>$layoutPath]);?>
    <div id="container">
        <div id="content">
            <div class="clear"></div>
            <div style="margin-top: 10px;"></div>
            <?=$content?>
        </div>
        <?=$this->render('/layouts/_footerads', ['layoutPath'=>$layoutPath]);?>
    </div>
    <?=$this->render('/layouts/_footerbottom', ['layoutPath'=>$layoutPath]);?>
</body>
</html>
