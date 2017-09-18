<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \dosamigos\ckeditor\CKEditor;
use \dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Brands */
/* @var $form yii\widgets\ActiveForm */
$prompt = [
        'prompt' => 'Выберите значения...'
];


?>

<div class="brands-form">

    <?
        $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); 
    ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?echo $form->field($model, 'id_category')->dropDownList($categories, $prompt);?>

    <?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <div class="form-group">
        <div class="col-md-offset-3 col-md-10">
            <?$images = $model->getImages();?>
            <div class="row">
                <?foreach($images as $image):?>
                    <div class="col-md-3 text-center">
                        <img src="<?=$image->getUrl('x200')?>" />
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>

    <?//= $form->field($model, 'gallery')->textarea(['rows' => 6]) ?>
    <?//= $form->field($model, 'gallery')->fileInput() ?>

    <?= $form->field($model, 'rate')->textInput() ?>

    <?//= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced',
        'clientOptions' => ['filebrowserUploadUrl' => '/admin/images',],
    ]) ?>

    <?= $form->field($model, 'id_country')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
