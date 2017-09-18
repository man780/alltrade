<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Discounting */

$this->title = Yii::t('app', 'Create Discounting');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Discountings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discounting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
