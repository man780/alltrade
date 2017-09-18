<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use backend\models\Ads;
use \frontend\themes\alltrade\assets\AppAssets;

use \frontend\widgets\leftMenuFields\LeftMenuFieldsWidget;

$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
/* @var $this yii\web\View */
/* @var $model frontend\models\Category */

$this->title = $model->name;
?>
<style type="text/css">
    .form-group {
        float: left;
    }
</style>
<div class="category-filtr">
    <div class="categoty-left">
        <div class="category-left-gotov">
            Пременить
        </div>
        <?=LeftMenuFieldsWidget::widget(['id_category' => $model->id]);?>
    </div>
    <div class="categoty-right">
        <div style="padding: 10px; padding-bottom: 0px;">
            <p style="font-size: 80%">
                <a href="#" class="a">Главная</a> / <a href="#" class="a">Все Kатегории</a> / <a href="#" class="a"> Для дома </a> / Дом 280 результатов
            </p>
        </div>
        <h1 style="margin: 0; padding-bottom: 5px; padding-left: 10px;"><?= Html::encode($this->title) ?></h1>
        <form>
            <div class="topForm">
                <div>
                    <?=\frontend\widgets\viloyatTuman4Form\ViloyatTuman44FormWidget::widget();?>
                    <!-- <input type="checkbox" id="check2"><label for="check2">Только с фото</label> -->
                    <input type="checkbox" id="check2"><label for="check2" style="margin-top: 6px; margin-left: 5px;">Только с фото</label>
                    <span class="cat-cost filter-none">Цена</span>
                    <div class="clear"></div>
                    <div class="agent">
                        <ul>
                            <a href="">
                                <li>
                                    Все
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    Агентсвто
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    Частное
                                </li>
                            </a>
                        </ul>
                    </div>
                    <div class="agent">
                        <ul>
                            <a href="">
                                <li>
                                    Все
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    Бизнес
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    Частное
                                </li>
                            </a>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>    
        </form>
        <div class="clear"></div>
        <!-- <div style="margin-top: 15px"></div> -->
        <div>
            <div class="cat-right-menu">
                Фильтры
            </div>
            <p>    
                <span style="float: right; margin-top: 10px; margin-right: 5px; margin-bottom: 5px;"><a href="<?=Url::toRoute(['category/view', 'id' => $model->id]);?>" style=""><img src="<?=$layoutPath?>/images/category/list1.png"></a></span>
                <span style="float: right; margin-right: 15px; margin-top: 10px; margin-bottom: 5px;"><a href="<?=Url::toRoute(['category/list', 'id' => $model->id]);?>"><img src="<?=$layoutPath?>/images/category/list2.png"></a></span>
                <span style="float: right; margin-top: 8px; margin-right: 10px; font-weight: bold;">Вид:</span>
            </p>
        </div>
        <div class="clear"></div>
        <div>
            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $listDataProvider,
                'itemView' => '_list',

                'options' => [
                    'tag' => 'div',
                    'class' => 'news-list1',
                    'id' => 'news-list',
                ],

                'layout' => "{summary}<div class='clear'></div>{items}<div class='clear'></div>{pager}",
                'summary' => 'Показано {count} из {totalCount}',
                'summaryOptions' => [
                    'tag' => 'span',
                    'class' => 'my-summary'
                ],

                'itemOptions' => [
                    'tag' => 'div',
                    'class' => 'list-item',
                ],

                'emptyText' => '<p>Список пуст</p>',
                'emptyTextOptions' => [
                    'tag' => 'p'
                ],

                'pager' => [
                    'firstPageLabel' => 'Первая',
                    'lastPageLabel' => 'Последняя',
                    'nextPageLabel' => 'Следующая',
                    'prevPageLabel' => 'Предыдущая',
                    'maxButtonCount' => 5,
                ],
            ]);
            ?>
        </div>
    </div>
    <div class="clear"></div>
</div>

<script type="text/javascript">
    $(function(){
        $('.cat-right-menu').click(function(){
            $('.categoty-left').addClass('category-left-margin');
            $('html, body').css('overflow', 'hidden');
        });
        $('.category-left-gotov').click(function(){
           $('.categoty-left').removeClass('category-left-margin');
           $('html, body').css('overflow', 'auto');
        })
    });
</script>