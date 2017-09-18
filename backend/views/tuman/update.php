<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuman */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tuman',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tumen'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_tuman]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tuman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
