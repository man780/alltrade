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
        $('#validatePhone1').mask("+998 (00) 000-00-00");
        <?if(!$model->isNewRecord):?>
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
        <?endif;?>
        $('#ads-id_category').change(function(){
            var id_ad = null;
            var id_cat = null;
            <?if($model->id_category) echo "id_cat = ".$model->id_category.';';?>
            if(this.value == id_cat){
                <?if(!is_null($model->id_category)):?>
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
                <?endif;?>                
            }else{
                $.ajax({
                url: '/ads/additional',
                type: "get",
                data: {id_category: this.value, id_ad: id_ad},
                success: function (data) {
                    $('.additional-fields').html(data);
                }
            });
            }
        });

        $('span.phone-plus').click(function(){
            var parentList = $('.phone-list');
            var input = $('.phone-item:last');
            var input1 = input.clone();
            input1.find('input:first').val('');
            if($('.phone-item').length < 3){
                input1.appendTo(parentList);
                var dataID = $('.phone-item:last input:first').attr('data-id');
                dataID++;
                var inputValue = 'Ads[phone][contact_phone' + dataID + ']';
                $('.phone-item:last input:first').attr('data-id', dataID);
                var validatePhone = 'validatePhone' + dataID;
                $('.phone-item:last input:first').attr('id', validatePhone);
                $('.phone-item:last input:first').attr('name', inputValue);
                var validatePhoneValue = '#validatePhone' + dataID;
                $(validatePhoneValue).mask("+998 (00) 000-00-00");
                //alert(validatePhoneValue);
                var whatsappValue = 'Ads[phone][whatsapp' + dataID + ']';
                var value = $('.whatsapp:last').attr('id') + 1;
                $('.whatsapp:last').attr('id', value);
                $('.whatsapp:last').attr('name', whatsappValue);
                $('.whatsapp:last').next().attr('for', value);
                $('.whatsapp:last').prop("checked", false);
                var telegramValue = 'Ads[phone][telegram' + dataID + ']';
                $('.telegram:last').attr('name', telegramValue);
                var value1 = $('.telegram:last').attr('id') + 1;
                $('.telegram:last').attr('id', value1);
                $('.telegram:last').next().attr('for', value1);
                $('.telegram:last').prop("checked", false);
                $('span.phone-minus').css('display', 'block');
            }
            if($('.phone-item').length >= 3){
                $(this).css('display', 'none');
            }
        });
        $('span.phone-minus').click(function(){
            if($('.phone-item').length >1){
                $( ".phone-item:last" ).remove();
            }
            if ($('.phone-item').length <= 1) {
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
        if (!$('.phone-item:first input:first').attr('value')) {
            //$('.phone-item:first input:first').attr('value', '998');
        };

        $('#add-image-0').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-0').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-1').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-1').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-2').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-2').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-3').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-3').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-4').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-4').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-5').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-5').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-6').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-6').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-7').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-7').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
        $('#add-image-8').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-8').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });

        $('.ads-close-photo').click(function(){
            var thisB = $(this);
            var thisLi = thisB.parents('li.add-file');
            var thisImg = thisLi.find('img');
            var thisInput = thisLi.find('input:first');
            thisInput.val('');
            thisImg.attr('src', '/images/ads/plus1.png');
            var thisDelete = $('.deleteImage').val();
            thisDelete = thisDelete + thisInput.attr('data-id') + ',';
            $('.deleteImage').val(thisDelete);
        });

    })

</script>

<div class="ads-form">
    
    <?php $form = ActiveForm::begin(['options' => [
                'class' => 'contact_form',
                'enctype' => 'multipart/form-data',
             ]]); ?>
    
    <?//= $form->field($model, 'id_category')->dropDownList($categories, $prompt);?>
    <?= $form->field($model, 'id_category')->hiddenInput();?>
    <?=\frontend\widgets\category4Form\Category4FormWidget::widget(['id_menu' => 1, 'id_category' => $model->id_category]);?>

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

    <style>
        .add-file{
            float: left;

        }
        input[file]{
            width: 90px;
        }
    </style>
    <?//= $form->field($model, 'image')->hiddenInput() ?>
    <div class="form-group">
        <label class="titul">Фотографии</label>
        <ul class="photos-show-mini">
            <input type="hidden" class="deleteImage" name="AdsImagesDelete" value="">

            <?
            $imagesArr = json_decode($model->image, true);
            ?>
            <?for($i=0; $i<9; $i++):?>
            <?//vd($imagesArr[$i])?>
            <?if(isset($imagesArr[$i])):?>
                <li id="add-file-<?=$i?>" class="add-file hasImage">
                    <div style="position: relative;">
                        <input type="file" name="AdsImages[<?=$i?>]" id="add-image-<?=$i?>" style="display: none;" data-id="<?=$i?>">
                        <label for="add-image-<?=$i?>">
                            <img alt="" class="image-preview" id="image-preview-<?=$i?>" src="/images/ads/<?=$model->id?>/<?=$imagesArr[$i]['min']?>"/>
                        </label>
                        <div class="ads-close-photo" data-id="<?=$i?>"></div>
                        <input type="hidden" name="OldAdsImages[<?=$i?>]" value='<?=json_encode($imagesArr[$i])?>'>
                    </div>
                </li>
            <?else:?>
                <li id="add-file-<?=$i?>" class="add-file">
                    <div style="position: relative;">
                        <input type="file" name="AdsImages[<?=$i?>]" id="add-image-<?=$i?>" style="display: none" data-id="<?=$i?>">
                        <label for="add-image-<?=$i?>">
                            <img alt="" class="image-preview" id="image-preview-<?=$i?>" src="/images/ads/plus1.png"/>
                        </label>
                        <div class="ads-close-photo" data-id="<?=$i?>"></div>
                    </div>
                </li>
            <?endif;?>
            <?endfor;?>
        </ul>
        <div style="clear:both;"></div>
    </div>


    <?//= $form->field($model, 'id_viloyat')->dropDownList($viloyats, $prompt);?>
    <?= $form->field($model, 'id_viloyat')->hiddenInput()->label('');?>
    

    <?//= $form->field($model, 'id_tuman')->dropDownList($tumans, $prompt);?>
    <?= $form->field($model, 'id_tuman')->hiddenInput()->label('');?>
    <?=\frontend\widgets\viloyatTuman4Form\ViloyatTuman4FormWidget::widget(['id_viloyat' => $model->id_viloyat, 'id_tuman' => $model->id_tuman]);?>

    <div class="clear"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>

    <?= $form->field($model, 'contact_name')->textInput(['required' => 'required']);?>
    <? $phones = json_decode($model->contact_phone, true);?>
    <div class="form-group">
        <label class="control-label" for="ads-contact_phone">Номер телефона</label>
        <div>
            <table>
                <tr>
                    <td>
                        <div class="phone-list">
                            <?if(isset($phones['contact_phone1'])):?>
                                <div class="phone-item">
                                    <input type="text" name="Ads[phone][contact_phone1]" required="required" id="validatePhone1" data-id="1" value="<?=$phones['contact_phone1']?>">
                                    <?if(isset($phones['whatsapp1'])):?>
                                        <input type="checkbox" name="Ads[phone][whatsapp1]" value="whatsapp" id="Ads[contact_phone_attributes][]0" class="whatsapp" checked>
                                        <label for="Ads[contact_phone_attributes][]0" class="whatsapplabel">Whatsapp</label>
                                    <?else:?>
                                        <input type="checkbox" name="Ads[phone][whatsapp1]" value="whatsapp" id="Ads[contact_phone_attributes][]0" class="whatsapp">
                                        <label for="Ads[contact_phone_attributes][]0" class="whatsapplabel">Whatsapp</label>
                                    <?endif;?>
                                    <?if(isset($phones['telegram1'])):?>
                                        <input type="checkbox" name="Ads[phone][telegram1]" value="telegram" id="Ads[contact_phone_attributes][]1" class="telegram" checked>
                                        <label for="Ads[contact_phone_attributes][]1" class="telegramlabel">Telegram</label>    
                                    <?else:?>
                                        <input type="checkbox" name="Ads[phone][telegram1]" value="telegram" id="Ads[contact_phone_attributes][]1" class="telegram">
                                        <label for="Ads[contact_phone_attributes][]1" class="telegramlabel">Telegram</label>
                                    <?endif;?>
                                    <br>
                                </div>
                            <?else:?>
                                <div class="phone-item">
                                    <input type="text" name="Ads[phone][contact_phone1]" required="required" id="validatePhone1" data-id="1">
                                    <input type="checkbox" name="Ads[phone][whatsapp1]" value="whatsapp" id="Ads[contact_phone_attributes][]0" class="whatsapp">
                                    <label for="Ads[contact_phone_attributes][]0" class="whatsapplabel">Whatsapp</label>
                                    <input type="checkbox" name="Ads[phone][telegram1]" value="telegram" id="Ads[contact_phone_attributes][]1" class="telegram">
                                    <label for="Ads[contact_phone_attributes][]1" class="telegramlabel">Telegram</label>
                                    <br>
                                </div>
                            <?endif;?>
                            <?if(isset($phones['contact_phone2'])):?>
                                <div class="phone-item">
                                    <input type="text" name="Ads[phone][contact_phone2]" required="required" id="validatePhone2" data-id="2" value="<?=$phones['contact_phone2']?>">
                                    <?if(isset($phones['whatsapp2'])):?>
                                        <input type="checkbox" name="Ads[phone][whatsapp2]" value="whatsapp" id="Ads[contact_phone_attributes][]01" class="whatsapp" checked>
                                        <label for="Ads[contact_phone_attributes][]01" class="whatsapplabel">Whatsapp</label>
                                    <?else:?>
                                        <input type="checkbox" name="Ads[phone][whatsapp2]" value="whatsapp" id="Ads[contact_phone_attributes][]01" class="whatsapp">
                                        <label for="Ads[contact_phone_attributes][]01" class="whatsapplabel">Whatsapp</label>
                                    <?endif;?>
                                    <?if(isset($phones['telegram2'])):?>
                                        <input type="checkbox" name="Ads[phone][telegram2]" value="telegram" id="Ads[contact_phone_attributes][]11" class="telegram" checked>
                                        <label for="Ads[contact_phone_attributes][]11" class="telegramlabel">Telegram</label>    
                                    <?else:?>
                                        <input type="checkbox" name="Ads[phone][telegram2]" value="telegram" id="Ads[contact_phone_attributes][]11" class="telegram">
                                        <label for="Ads[contact_phone_attributes][]11" class="telegramlabel">Telegram</label>
                                    <?endif;?>
                                    <br>
                                </div>
                            <?endif;?>
                            <?if(isset($phones['contact_phone3'])):?>
                                <div class="phone-item">
                                    <input type="text" name="Ads[phone][contact_phone3]" required="required" id="validatePhone3" data-id="3" value="<?=$phones['contact_phone3']?>">
                                    <?if(isset($phones['whatsapp3'])):?>
                                        <input type="checkbox" name="Ads[phone][whatsapp3]" value="whatsapp" id="Ads[contact_phone_attributes][]011" class="whatsapp" checked>
                                        <label for="Ads[contact_phone_attributes][]011" class="whatsapplabel">Whatsapp</label>
                                    <?else:?>
                                        <input type="checkbox" name="Ads[phone][whatsapp3]" value="whatsapp" id="Ads[contact_phone_attributes][]011" class="whatsapp">
                                        <label for="Ads[contact_phone_attributes][]011" class="whatsapplabel">Whatsapp</label>
                                    <?endif;?>
                                    <?if(isset($phones['telegram3'])):?>
                                        <input type="checkbox" name="Ads[phone][telegram3]" value="telegram" id="Ads[contact_phone_attributes][]111" class="telegram" checked>
                                        <label for="Ads[contact_phone_attributes][]111" class="telegramlabel">Telegram</label>    
                                    <?else:?>
                                        <input type="checkbox" name="Ads[phone][telegram3]" value="telegram" id="Ads[contact_phone_attributes][]111" class="telegram">
                                        <label for="Ads[contact_phone_attributes][]111" class="telegramlabel">Telegram</label>
                                    <?endif;?>
                                    <br>
                                </div>
                            <?endif;?>
                        </div>
                        <div>
                            <span class="phone-minus">Удалить номер</span>
                            <span class="phone-plus">Добавить номер</span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>   


    
    <!-- <?= $form->field($model, 'contact_phone_attributes', [
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
    ]); ?> -->

    <?= $form->field($model, 'contact_email')->textInput();?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
