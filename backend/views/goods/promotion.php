<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/16/16
 * Time: 1:12 PM
 * To change this template use File | Settings | File Templates.
 */
$dataArr = json_decode($model->is_promotion, true);
$from_date = date($dataArr[0]);
$to_date = date($dataArr[1]);
$description = $dataArr[2];
//vd($description);
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'old_cost')->textInput() ?>

<?= $form->field($model, 'cost')->textInput() ?>

<div class="row">
    <p>Периуд акции</p>
<label>с:</label><?= DatePicker::widget([
    'name'  => 'from_date',
    'value'  => $from_date,
    //'language' => 'ru',
    'dateFormat' => 'dd.MM.yyyy',
])?>

<label>по:</label><?= DatePicker::widget([
    'name'  => 'to_date',
    'value'  => $to_date,
    'dateFormat' => 'dd.MM.yyyy',
    //'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
])?>
</div>
<div class="row">
    <?=Html::label('Описание');?>
    <?=Html::textarea('description', $description);?>
</div>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'Сделать акцию'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>