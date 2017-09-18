<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DiscountingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Discountings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discounting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Discounting'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_good',
            'dbegin',
            'dend',
            'count',
            // 'cost',
            // 'type',
            // 'dcreated',
            // 'bycreated',
            // 'dmodified',
            // 'bymodified',
            // 'ddeleted',
            // 'bydeleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
