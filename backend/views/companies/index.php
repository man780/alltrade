<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompaniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Companies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Companies'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'id_user',
            'status',
            'dcreated',
            // 'bycreated',
            // 'dmodified',
            // 'bymodified',
            // 'ddeleted',
            // 'bydeleted',
            // 'text:ntext',
            // 'image',
            // 'address:ntext',
            // 'phone',
            // 'id_country',
            // 'gallery:ntext',
            // 'rate',
            // 'like',
            // 'dislike',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
