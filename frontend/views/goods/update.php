<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Goods',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'categories' => $categories,
        'brands' => $brands,
        'states' => $states,
        'companies' => $companies,
        'countries' => $countries,
        'currencies' => $currencies,
        'model' => $model,
    ]) ?>

</div>
