<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \dosamigos\ckeditor\CKEditor;
use \dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */
/* @var $form yii\widgets\ActiveForm */
$prompt = [
    'prompt' => 'Выберите значения...'
];
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(['options' => [
                'class' => 'contact_form',
             ]]); ?>

    <?echo $form->field($model, 'id_category')->dropDownList($categories, $prompt);?>
    
    <?echo $form->field($model, 'id_currency')->dropDownList($currencies, $prompt);?>

    <?//echo $form->field($model, 'id_states')->dropDownList($states, $prompt);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>
    
    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?//= $form->field($model, 'gallery')->textarea(['rows' => 6]) ?>

    <?/*= $form->field($model, 'status')->textInput() */?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
