<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_parent') ?>

    <?= $form->field($model, 'id_menu') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'decription') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'status') ?>

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
