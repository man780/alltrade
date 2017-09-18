<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/2/16
 * Time: 4:18 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_shablon')->radioList(
    [
        1 => '<img src="/images/template/1.jpg"/>',
        2 => '<img src="/images/template/2.jpg"/>',
        3 => '<img src="/images/template/3.jpg"/>',
    ],
    [
        'item' => function ($index, $label, $name, $checked, $value) {
            return
                '<div class="template-img"><label>' . Html::radio($name, $checked, ['value' => $value]) . $label . '</label></div>';
        },
    ]
); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Изменить шаблон'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>