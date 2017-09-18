<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$imageArr = json_decode($model->image, true);
$galleryArr = json_decode($model->gallery, true);
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <img src="/images/goods/<?=$model->id?>/<?=$imageArr['max']?>">

    <div class="row">

        <?if(!is_null($galleryArr))
        foreach($galleryArr as $galImage):?>
        <img src="/images/goods/<?=$model->id?>/gallery/<?=$galImage['min']?>">
        <?endforeach?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_category',
            'id_brand',
            'id_company',
            'id_currency',
            'id_states',
            'name',
            'text:ntext',
            'count',
            'count_all',
            'old_cost',
            'cost',
            'color',
            'size',
            'like',
            'dislike',
            'rate',
            'delivery',
            'status',
        ],
    ]) ?>

</div>
