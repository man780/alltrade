<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use \dosamigos\ckeditor\CKEditor;
//use \dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Ads */
/* @var $form yii\widgets\ActiveForm */
$prompt = [
    'prompt' => 'Выберите значения...'
];
?>
<script type="text/javascript">
    $(document).ready(function(){
        <?
    if(!$model->isNewRecord):?>
        $( window ).load(function() {
            var id_category = <?=$model->id_category?>;
            var id_ad = <?=$model->id?>;
            $.ajax({
                url: '/ads/additional',
                type: "get",
                data: {id_category: id_category, id_ad: id_ad},
                success: function (data) {
                    $('.additional-fields').html(data);
                }
            });
        })
    <?endif;?>
        $('#ads-id_category').change(function(){
            var id_ad = null;
            var id_cat = <?=$model->id_category?>;
            //При редактировании перевыбрать категорию
            if(this.value == id_cat){
                var id_category = <?=$model->id_category?>;
                var id_ad = <?=$model->id?>;
                $.ajax({
                    url: '/ads/additional',
                    type: "get",
                    data: {id_category: id_category, id_ad: id_ad},
                    success: function (data) {
                        $('.additional-fields').html(data);
                    }
                });
            }else{
                $.ajax({
                url: '/ads/additional',
                type: "get",
                data: {id_category: this.value, id_ad: id_ad},
                //data: {id_category: this.value},
                success: function (data) {
                    $('.additional-fields').html(data);
                }
            });
            }
            
        });

        $('span.phone-plus').click(function(){
            //alert("1");

            var parentList = $('.phone-list');
            var input = $('.phone-item:first');

            var input1 = input.clone();

            //input1.attr('name', this.attr('name'));
            //input1.setAttr
            if($('.phone-item').length < 3){
                input1.appendTo(parentList);
                $('.phone-item:last input').attr('value', '998');
                $('span.phone-minus').css('display', 'block');
            }
            if($('.phone-item').length >= 3){
                //alert($('.phone-item').length);
                $(this).css('display', 'none');
            }
        });
        $('span.phone-minus').click(function(){
            //alert('1');
            if($('.phone-item').length >1){
                //alert($('span.phone-polya').length);
                $( ".phone-item:last" ).remove();
            }
            if ($('.phone-item').length <= 1) {
                //alert($('.phone-item').length );
                $(this).css('display', 'none');
            }
            if ($('.phone-item').length <= 2)
                $('span.phone-plus').css('display', 'block');
        });
        if ($('.phone-item').length < 3) {
           $('span.phone-plus').css('display', 'block');
        }
        else {
            $('span.phone-plus').css('display', 'none');
        }
        if($('.phone-item').length <= 3 && $('.phone-item').length > 1){
            //alert($('.phone-item').length);
            $('span.phone-minus').css('display', 'block');
        }
        else {
            $('span.phone-minus').css('display', 'none');
        }

        var name = $('.phone-item input').attr('name');
        name = name + '[]';
        //alert(name);
        $('.phone-item input').attr('name', name);
        if (!$('.phone-item:first input').attr('value')) {
            $('.phone-item:first input').attr('value', '998');
        };
    })

</script>

<div class="ads-form">

    
    <?php $form = ActiveForm::begin(['options' => [
                'class' => 'contact_form',
             ]]); ?>
    
    <div class="container">
    <?//= $form->field($model, 'id_category')->dropDownList($categories, $prompt);?>
    <?= $form->field($model, 'id_category')->hiddenInput();?>
    <?=\frontend\widgets\category4Form\Category4FormWidget::widget(['id_menu' => 1, 'id_category' => $model->id_category]);?>
    </div>

    <?= $form->field($model, 'name',  [
                'template' => '{label}{input}<span class="form_hint">Введите понятный и подробный заголовок, <br> чтобы привлечь внимание к обявлению</span>{error}{hint}'
                ])->textInput(['maxlength' => true, 'required' => 'required']) ?>
    
    <div class="clear"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
    <div class="additional-fields">
    </div>

    <?/*= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) */?>

    <?= $form->field($model, 'text',  [
                'template' => '{label}{input}<span class="form_hint">Введите понятный и подробный заголовок, <br> чтобы привлечь внимание к обявлению</span>{error}{hint}'
                ])->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
    ])->textarea(['required' => 'required', 'rows' => 6]) ?>

    <?//= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput(['required' => 'required']) ?>

    <?= $form->field($model, 'id_currency', [
        'template' => '{label} {input}{error}{hint}'
    ])->radioList($currencies, [
        'item' => function($index, $label, $name, $checked, $value) {
            if($checked){
                $return = '<input type="radio" name="' . $name . '" value="' . $value . '" id="'.$name.$index.'" checked>';
            }else{
                $return = '<input type="radio" name="' . $name . '" value="' . $value . '" id="'.$name.$index.'">';
            }
            $return .= '<label for="'.$name.$index.'">' . ucwords($label) . '</label>';
            return $return;
        }
    ]); ?>

    <?//= $form->field($model, 'delivery')->textInput();?>
    <? /*$form->field($model, 'delivery')->checkboxList(['delivery' => 'Доставка'], [
        'item' => function($index, $label, $name, $checked, $value) {
            if($checked){
                $return = '<input type="checkbox" name="' . $name . '" value="' . $value . '" id="'.$name.$index.'" checked>';
            }else{
                $return = '<input type="checkbox" name="' . $name . '" value="' . $value . '" id="'.$name.$index.'">';
            }
            $return .= '<label for="'.$name.$index.'">' . ucwords($label) . '</label>';

            return $return;
        }]);*/ ?>

    <?//= $form->field($model, 'id_states')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <div class="ads-image-cont">
            <?$images = $model->getImages();?>
            <?foreach($images as $image):?>
            <div class="ads-image">
                <img src="<?=$image->getUrl('x200')?>" />
                <div class="ads-close" onclick="javascript:  $(this).parent('.ads-image').remove();"></div>
            </div>
            <?endforeach;?>
        </div>
    </div>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
    <?//= $form->field($model, 'id_viloyat')->dropDownList($viloyats, $prompt);?>
    <?= $form->field($model, 'id_viloyat')->hiddenInput()->label('');?>
    

    <?//= $form->field($model, 'id_tuman')->dropDownList($tumans, $prompt);?>
    <?= $form->field($model, 'id_tuman')->hiddenInput()->label('');?>
    <?=\frontend\widgets\viloyatTuman4Form\ViloyatTuman4FormWidget::widget(['id_viloyat' => $model->id_viloyat, 'id_tuman' => $model->id_tuman]);?>

    <div class="clear"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>

    <?= $form->field($model, 'contact_name')->textInput(['required' => 'required']);?>

    <?
        if(is_array($model->contact_phone)){?>
            <div class="form-group">
                <label class="control-label" for="ads-contact_phone">Номер телефона</label>
                <div>
                    <table>
                        <tr>
                            <td>
                                <div class="phone-list">
                                <?foreach ($model->contact_phone as $value) {?>
                                    <div class="phone-item">
                                        <?echo Html::textInput("Ads[contact_phone]", $value, $options = ['required' => 'required', 'pattern' => '[0-9]{12}']);?>
                                        <span class="form_hint">"998974401001"</span>
                                        <br>
                                    </div>
                                    <?}?>
                                </div>
                                <div>
                                    <span class="phone-plus">Добавить номер</span>
                                    <span class="phone-minus">Удалить номер</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <?}else{
            echo $form->field($model, 'contact_phone', [
                'template' => '{label}
                                <div>
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="phone-list">
                                                    <div class="phone-item">
                                                        {input}
                                                        <span class="form_hint">"998974401001"</span>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="phone-plus">Добавить номер</span>
                                                    <span class="phone-minus">Удалить номер</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                {error}{hint}',
                ])->textInput(['pattern' => '[0-9]{12}', 'required' => 'required']);
        }

    ?>
    <?= $form->field($model, 'contact_phone_attributes', [
        //'template' => '{label} {input}{error}{hint}'
    ])->checkboxList(['whatsapp' => 'whatsapp', 'telegram' => 'telegram'], [
        'item' => function($index, $label, $name, $checked, $value) {
            if($checked){
                $return = '<input type="checkbox" name="' . $name . '" value="' . $value . '" id="'.$name.$index.'" checked>';
            }else{
                $return = '<input type="checkbox" name="' . $name . '" value="' . $value . '" id="'.$name.$index.'">';
            }
            $return .= '<label for="'.$name.$index.'">' . ucwords($label) . '</label>';

            return $return;
        }
    ]); ?>

    <?= $form->field($model, 'contact_email')->textInput();?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
