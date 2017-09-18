<?
	use yii\helpers\Url;
	use yii\widgets\LinkPager;
	$layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
?>
<div style="margin-top: 10px;"></div>
<h2 style="color: #000; margin: 0; padding: 10px">ТОПОВЫЕ ОБЪЯВЛЕНИЕ</h2>
<div style="border-bottom: 1px solid red;"></div>
<div style="background: #ddd; text-align: center; padding: 10px 0;">
    <div class="qualityMarkdiv">
        <? if ($id_cat == null): ?>
            <a href="<?=Url::toRoute(['/adstop/index']);?>" class="a back largeactive">Все</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index']);?>" class="a back">Все</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 76): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 76]);?>" class="a back largeactive">Женская одежда</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 76]);?>" class="a back">Женская одежда</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 77): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 77]);?>" class="a back largeactive">Мужская одежда</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 77]);?>" class="a back">Мужская одежда</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 45): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 45]);?>" class="a back largeactive">Компьютеры</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 45]);?>" class="a back">Компьютеры</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 44): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 44]);?>" class="a back largeactive">Телефоны</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 44]);?>" class="a back">Телефоны</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 35): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 35]);?>" class="a back largeactive">Для дома</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 35]);?>" class="a back">Для дома</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 81): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 81]);?>" class="a back largeactive">Спортивная одежда</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 81]);?>" class="a back">Спортивная одежда</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 46): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 46]);?>" class="a back largeactive">Тв / видеотехника</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 46]);?>" class="a back">Тв / видеотехника</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 78): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 78]);?>" class="a back largeactive">Обувь</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 78]);?>" class="a back">Обувь</a>
        <? endif ?>
    </div>
    <div class="qualityMarkdiv">
        <? if ($id_cat == 36): ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 36]);?>" class="a back largeactive">Детям и мамам</a>
        <? else: ?>
            <a href="<?=Url::toRoute(['/adstop/index', 'id_cat' => 36]);?>" class="a back">Детям и мамам</a>
        <? endif ?>
    </div>
    <div class="clear"></div>
</div>
<ul class="tovarpro-discount-container">
	<?foreach($ads as $ad):?>
	    <?
	    $imageArr = json_decode($ad['image'], true);
	    ?>
	    <?//vd($ad['image'], false);?>
	    <a href="<?=Url::toRoute(['/ads/view', 'id' => $ad['id']]);?>" class="a">
		    <li class="tovarpro-largediscount">
		        <div class="tovarpro-discount-p"><img src="/images/ads/<?=$ad['id']?>/<?=$imageArr[0]['min']?>"></div>
		        <div>
		            <p class="tovarpro-discount-p-p"><?=$ad['name']?></p>
		            <p class="tovarpro-discount-cost">
		            	<?=number_format($ad['cost'], 0, ',', ' ')?> 
						<? if ($ad['id_currency'] == 1) {
							echo "сум";
						}else {
							echo "у.е.";
						} ?>
		            </p>
		        </div>
		    </li>
	    </a>
    <?endforeach;?>
</ul>
<div class="clear"></div>
<div style="background: #ddd; padding: 10px 0;">
	<?= LinkPager::widget(['pagination' => $pagination]); ?>
</div>
<div class="clear"></div>