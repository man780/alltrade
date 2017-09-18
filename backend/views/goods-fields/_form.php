<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GoodsFields */
/* @var $form yii\widgets\ActiveForm */
$prompt = [
    'prompt' => 'Выберите значения...'
];
?>

<div class="goods-fields-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_category')->textInput() ?>
    <!-- <?echo $form->field($model, 'id_category')->dropDownList($categories, $prompt);?> -->

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'option')->textarea(['rows' => 6]) ?>
    
    <?if($model->isNewRecord):?>
    <label for="forChild">Для дочерних</label>
    <input type="checkbox" name="forChild" id="forChild">
    <?endif;?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
