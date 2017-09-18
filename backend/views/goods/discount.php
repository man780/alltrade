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
$dataArr = json_decode($model->is_discount, true);
$from_date = date($dataArr[0]);
$to_date = date($dataArr[1]);
//$description = $dataArr[2];
//vd($description);

$this->registerJs(" $('#goods-discount').change(function(){
    value = this.value;
    old_cost = $('#goods-old_cost').val();
    var cost = old_cost*(100-value)/100;
    $('#goods-cost').val(cost);
})"
);
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'old_cost')->textInput(['disabled' => true]) ?>

<?= $form->field($model, 'discount')->textInput() ?>

<?= $form->field($model, 'cost')->textInput() ?>


<div class="row">
    <p>Периуд Скидки</p>
    <label>с:</label><?= DatePicker::widget([
    'name'  => 'from_date',
    'value'  => $from_date,
    'dateFormat' => 'dd.MM.yyyy',
])?>

    <label>по:</label><?= DatePicker::widget([
    'name'  => 'to_date',
    'value'  => $to_date,
    'dateFormat' => 'dd.MM.yyyy',
])?>
</div>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'Сделать скидку'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>