<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GoodsFields */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Goods Fields',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Fields'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="goods-fields-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'categories' => $categories,
        'model' => $model,
    ]) ?>

</div>
