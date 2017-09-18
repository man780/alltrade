<?
use frontend\widgets\category\CategoryWidget;
use yii\helpers\Url;
?>
<div id="header">
            
    <div class="clear"></div>

    <div style="margin-top: 10px; border-bottom: 1px solid #ddd;"></div>

    <div class="topheaderlink">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; width: 220px;">
                    <p style="font-size: 13px;">Категории</p>
                </td>
                <td colspan="5" style="border-bottom: 1px solid #ddd; padding-left: 10px;">
                    <p>
                        <a href="#" class="a">Горящие товары</a>
                        <a href="#" class="a apadding">iTao</a>
                        <a href="#" class="a apadding">Бренд-фокус</a>
                        <a href="#" class="a apadding">Hi-TechКоллекции</a>
                        <a href="#" class="a apadding">Мода</a>
                        <a href="#" class="a apadding">Бестселлеры</a>
                    </p>
                </td>
            </tr>
        </table>
    </div>
                
    <div style="max-width: 240px; float: left; position: relative;">
        <div class="leftmenuindex">
            <?//include('blocks/category.php');?>
            <?/*=$this->render('/layouts/_category', ['layoutPath'=>$layoutPath, 'categories' => $categories]);*/?>
            <?=CategoryWidget::widget(['id_menu' => 1]);?>
        </div>
    </div>
                
        <?//include('blocks/_slide.php')?>
    <?=$this->render('/layouts/_slide', ['layoutPath'=>$layoutPath]);?>
    <?//include('blocks/banner.php')?>
    <?=$this->render('/layouts/_banner', ['layoutPath'=>$layoutPath]);?>

    <div class="clear"></div>

    <div class="bannerbottom">
        <div style="width:50%; float:left; text-align: center;">
            <img src="<?=$layoutPath?>/images/banner/1.1.jpg" class="bannerrightimg2">
        </div>
        <div style="width:50%; float:left; text-align: center;">
            <img src="<?=$layoutPath?>/images/banner/2.1.jpg" class="bannerrightimg3">
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="topads">
    <h3 style="padding-left: 10px; padding-bottom: 10px; padding-top: 10px; background: #eee; margin-top: 10px; margin-bottom: 0;">ТОПОВЫЕ ОБЪЯВЛЕНИЕ</h3>
    <div style="border-bottom: 1px solid red; margin-bottom: 5px"></div>
    <div class="clear"></div>

    <ul style="margin: 0; padding-left: 4px; padding-right: 2px;">

        <?foreach($ads as $ad):?>
        <?
        $imageArr = json_decode($ad['image'], true);
        ?>
        <a href="<?=Url::toRoute(['/ads/view', 'id' => $ad['id']]);?>" class="a">
        <li class="tovartopads">
            <p class="tovartopadsp"><img class="qualityMarkimg" src="/images/ads/<?=$ad['id']?>/<?=$imageArr[0]['min']?>"></p>
            <div style="padding-left: 10px; padding-right: 10px;">
                <p style="text-align: center;"><?=$ad['name']?></p>
            </div>
        </li>
        </a>
        <?endforeach;?>
    </ul>
    <div style="margin-top: 10px; float: right;">
        <a href="<?=Url::toRoute(['/adstop/index']);?>" class="qualityMarklink" style="margin-right: 5px;">Смотреть все</a>
    </div>
    <div class="clear"></div>
    <div style="padding-top: 10px;"></div>
</div>
<div class="clear"></div>