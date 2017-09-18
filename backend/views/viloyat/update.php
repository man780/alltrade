<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Viloyat */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Viloyat',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Viloyats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_vil]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="viloyat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
