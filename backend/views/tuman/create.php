<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tuman */

$this->title = Yii::t('app', 'Create Tuman');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tumen'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
