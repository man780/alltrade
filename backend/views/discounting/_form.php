<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Discounting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discounting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_good')->textInput() ?>

    <?= $form->field($model, 'dbegin')->textInput() ?>

    <?= $form->field($model, 'dend')->textInput() ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'dcreated')->textInput() ?>

    <?= $form->field($model, 'bycreated')->textInput() ?>

    <?= $form->field($model, 'dmodified')->textInput() ?>

    <?= $form->field($model, 'bymodified')->textInput() ?>

    <?= $form->field($model, 'ddeleted')->textInput() ?>

    <?= $form->field($model, 'bydeleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
