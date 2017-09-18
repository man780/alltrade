<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TumanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tuman') ?>

    <?= $form->field($model, 'id_vil') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'kod') ?>

    <?= $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
