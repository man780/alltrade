<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DiscountingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discounting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_good') ?>

    <?= $form->field($model, 'dbegin') ?>

    <?= $form->field($model, 'dend') ?>

    <?= $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'dcreated') ?>

    <?php // echo $form->field($model, 'bycreated') ?>

    <?php // echo $form->field($model, 'dmodified') ?>

    <?php // echo $form->field($model, 'bymodified') ?>

    <?php // echo $form->field($model, 'ddeleted') ?>

    <?php // echo $form->field($model, 'bydeleted') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
