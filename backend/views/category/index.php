<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

use backend\models\Category;
use backend\models\Menu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'id_parent',
                'label'=>'Родительская категория',
                'value'=>function($data){
                    return $data->getParentName();
                },
                'filter' => Category::getParentsList()
            ],
            [
                'attribute'=>'id_menu',
                'label'=>'Menu',

                'value'=>function($data){
                    return $data->getMenuName();
                },
                'filter' => Menu::getList()
            ],
            'name',
            'decription',
            'text:html',
            'image',
            //'image:image',
            /*[
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute($data->image),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:15px;'
                    ]);
                },
            ],*/
            [
                'attribute'=>'status',
                'value' => function($data){
                    $value = $data==1?'Активно':'Не активно';
                    return $value;
                },
                'filter'=>array(1=>"Активно", 0=>"Не активно"),
            ],
            [
                'attribute'=>'dcreated',
                'label'=>'Создано',
                'format'=>'datetime', // Доступные модификаторы - date:datetime:time
                'headerOptions' => ['width' => '200'],
            ],
            //'bycreated:date',
            // 'dmodified',
            // 'bymodified',
            // 'ddeleted',
            // 'bydeleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
