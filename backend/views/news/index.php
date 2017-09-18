<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create News'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'descr:ntext',
            'text:ntext',
            'img',
            // 'counter',
            // 'count_comment',
            // 'like',
            // 'dislike',
            // 'status',
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
