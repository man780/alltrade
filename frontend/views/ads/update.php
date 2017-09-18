<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ads */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ads',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ads-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    	'categories' => $categories,
        'brands' => $brands,
        'states' => $states,
        'companies' => $companies,
        'countries' => $countries,
        'currencies' => $currencies,
        'goodsFields' => $goodsFields,
        'viloyats' => $viloyats,
        'tumans' => $tumans,
        'model' => $model,
    ]) ?>

</div>
