<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Comments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Comments'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'title',
            'text:ntext',
            'status',
            // 'like',
            // 'dislike',
            // 'id_table',
            // 'table_name',
            // 'file',
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
