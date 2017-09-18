<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \dosamigos\ckeditor\CKEditor;
use \dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
$prompt = [
        'prompt' => 'Выберите значения...'
];
$parent = 'Родительский';
$categories[0] = $parent;

$this->registerJs( "jQuery(document).ready(function () {    
    jQuery('#category-id_parent').change(function(){
        if(this.value == 0){
            jQuery('.field-category-id_menu').show();
        }else{
            jQuery('.field-category-id_menu').hide();
        }
    });  

    if(jQuery('#category-id_parent').val() == 0){
        jQuery('.field-category-id_menu').show();
    }else{
        jQuery('.field-category-id_menu').hide();
    }  
});");?>

<div class="category-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?//= $form->field($model, 'id_parent')->textInput() ?>

    <?//vd(ArrayHelper::map($categories, 'id', 'name'));?>
    <?echo $form->field($model, 'id_parent')->dropDownList($categories, $prompt);?>

    <?echo $form->field($model, 'id_menu')->dropDownList($menu, $prompt);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'decription')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'decription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'status')->textInput() ?>
    <?
        echo $form->field($model, 'status')->dropDownList([
                '1' => 'Активный',
                '0' => 'Отключен',
            ],$prompt
        );
    ?>

    <?//= $form->field($model, 'dcreated')->textInput() ?>
    <?= $form->field($model, 'dcreated')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => true,
        // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd.mm.yyyy'
        ]
    ]);?>

    <?= $form->field($model, 'bycreated')->textInput() ?>

    <?//= $form->field($model, 'dmodified')->textInput() ?>
    <?= $form->field($model, 'dmodified')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => true,
        // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd.mm.yyyy'
        ]
    ]);?>

    <?= $form->field($model, 'bymodified')->textInput() ?>

    <?//= $form->field($model, 'ddeleted')->textInput() ?>
    <?= $form->field($model, 'ddeleted')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => true,
        // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd.mm.yyyy'
        ]
    ]);?>

    <?= $form->field($model, 'bydeleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
