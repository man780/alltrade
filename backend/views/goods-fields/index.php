<?php

use yii\helpers\Html;
use yii\grid\GridView;

use backend\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\GoodsFieldsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Goods Fields');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-fields-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Goods Fields'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'id_category',
                'label'=>'Категория',
                'value'=>function($data){
                    return $data->getCategoryName();
                },
                'filter' => Category::getCategoryList(),
            ],
            'name',
            'nameEn',
            'type',
            'option:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
