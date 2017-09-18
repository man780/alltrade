<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \dosamigos\ckeditor\CKEditor;

use backend\models\Viloyat;
//Yii::app()->clientScript->setCoreScriptUrl('/admin/assets/dc323edf/global/plugins/uniform/');
//Yii::app()->clientScript->scriptMap['jquery.uniform.min.js'] = false; 
$prompt = [
    'prompt' => 'Выберите значения...'
];
$this->registerJs( "$(document).ready(function(){
        $('#good-image').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });


    })");
for($i=0; $i<6; $i++){
    $this->registerJs( "$(document).ready(function(){
        $('#good-image-".$i."').change(function() {
            var input = $(this)[0];
            if ( input.files && input.files[0] ) {
                if ( input.files[0].type.match('image.*') ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview-".$i."').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else console.log('is not image mime type');
            } else console.log('not isset files data or files API not supordet');
        });
    })
    ");
}

$imageArr = json_decode($model->image, true);
//vd($imageArr);
if($model->image == ""){
    $imageSrc = '/images/ads/plus1.png';
}else{
    $imageSrc = $imageArr['min'] = "/images/goods/".$model->id."/".$imageArr['min'];
}
?>

<style type="text/css">
    ul li {
        list-style: none;
    }
    .clear {
        clear: both;
    }
    .image-preview {
        border: 1px solid #3CC01A;
    }
    input[type="checkbox"],
    input[type="radio"] {
      position: absolute;
      opacity: 0;
      z-index: -1;
    }
    label {
      position: relative;
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 0px;
      padding-left: 30px !important;
      padding-right: 10px;
      line-height: 15px;
      padding-top: 5px;
      padding-bottom: 5px;
      cursor: pointer;
    }
    label::before {
      content: " ";
      position: absolute;
      top: 3px;
      left: 0;
      display: block;
      width: 20px;
      height: 20px;
      border: 2px solid #4CAF50;
      border-radius: 4px;
      z-index: -1;
    }
    input[type="radio"] + label::before {
      border-radius: 18px;
    }
    /* Checked */
    input[type="checkbox"]:checked + label,
    input[type="radio"]:checked + label {
      padding-left: 10px !important;
      color: #fff;
    }
    input[type="checkbox"]:checked + label::before,
    input[type="radio"]:checked + label::before {
      top: 0;
      width: 100%;
      height: 100%;
      background: #4CAF50;
    }
    /* Transition */
    label,
    label::before {
      -webkit-transition: .25s all ease;
      -o-transition: .25s all ease;
      transition: .25s all ease;
    }
    label {
        z-index: 1;
        width: auto;
    }
    .form-group label:first-child {
        padding-left: 0 !important;
    }
    .form-group label:first-child::before {
        content: none;
    }
    #good-image + label,
    #good-image-0 + label,
    #good-image-1 + label,
    #good-image-2 + label,
    #good-image-3 + label,
    #good-image-4 + label,
    #good-image-5 + label {
        padding-left: 0 !important;
        padding-right: 0px !important;
    }
    #good-image + label::before,
    #good-image-0 + label::before,
    #good-image-1 + label::before,
    #good-image-2 + label::before,
    #good-image-3 + label::before,
    #good-image-4 + label::before,
    #good-image-5 + label::before {
        content: none;
    }
    .form-group label:first-child {
        padding-left: 0;
        width:170px;
        display:inline-block;
        float: left;
        /*text-align: right;*/
    }
    .form-group.field-goods-text.required label {
        float: none;
    }
    .additional-fields {
        margin-top: 15px;
    }
    .form-group input, .form-group select {
        width: 220px;
        padding: 5px 8px;
    }
    .field-goods-cost {
        float: left;
    }
    .form-group.field-goods-id_currency.required {
        margin-left: 10px;
        float: left;
    }
    .form-group.field-goods-id_currency.required .control-label{
        display: none;
    }
    .goods-div-img {
        width: 25%;
        float: left;
    }
    .image-preview-0 {
        max-width: 230px;
        max-width: 100%;
    }
    ul {
        padding: 0;
    }
    .goods-img-mini-div-1 {
        margin: 0 10px;
    }
    .goods-img-mini-div-2 {
        margin: 0 10px;
        float: left;
    }

    @media (max-width: 768px) {
        .form-group.field-goods-text.required label {
            float: left;
        }
        .form-group.field-goods-text.required textarea {
            width: 95%;
            height: 80px;
        }
    }
    @media (max-width: 600px) {
        .form-group label:first-child {
            width: 100%;
        }
        .field-goods-cost {
            float: none;
        }
        .form-group input, .form-group select {
            width: 80%;
        }
        .goods-div-img {
            width: 100%;
        }
        .goods-div-img {
            text-align: center;
        }
        .goods-img-mini-div-1 {
            float: left;
        }
    }
    @media (max-width: 400px) {
        .form-group input, .form-group select {
            width: 95%;
        }
    }
</style>

<?
if(!$model->isNewRecord){
$this->registerJs( "$(document).ready(function(){
        $( window ).load(function() {
            var id_category = ".$model->id_category.";
            var id_ad = ".$model->id.";
            $.ajax({
                url: '/goods/additional',
                type: 'get',
                data: {id_category: id_category, id_ad: id_ad},
                success: function (data) {
                    $('.additional-fields').html(data);
                }
            });

            $('#goods-id_category option').each(function(){
                //console.log(this.value +' '+ id_category);
                if(this.value == id_category){
                    $(this).attr('selected', 'selected');
                    return false;
                }
            })
        });
    });");
}
if($model->id_category){$id_cat = $model->id_category;}
else{$id_cat = null;}
$script = "";
if(!is_null($model->id_category)){
    $script = "var id_category = ".$model->id_category.";
                var id_ad = ".$model->id.";
                $.ajax({
                    url: '/goods/additional',
                    type: 'get',
                    data: {id_category: id_category, id_ad: id_ad},
                    success: function (data) {
                        $('.additional-fields').html(data);
                    }
                });";
}
if(!is_null($model->type_count_sale))
    $this->registerJs( "
    $(document).ready(function(){
        $('.other_fields-type_count_sale').show();
    })
    " );
$this->registerJs( "
    $(document).ready(function(){
        $('#goods-id_category').change(function(){
            var id_ad = null;
            var id_cat = '".$id_cat."';
            //При редактировании перевыбрать категорию
            if(this.value == id_cat){
                ".$script."
            }else{
                $.ajax({
                    url: '/goods/additional',
                    type: 'get',
                    data: {id_category: this.value, id_ad: id_ad},
                    //data: {id_category: this.value},
                    success: function (data) {
                        $('.additional-fields').html(data);
                    }
                });
            }
        });

        $('#goods-id_category option').each(function(){
            var thisOpt = $(this);
            thisD = parseInt(thisOpt.attr('data-depth'));
            if(thisD == 1 && thisOpt.next().attr('data-depth')>thisD){
                thisOpt.attr('disabled', 'disabled');                            
            }
            if(thisD == 2 && thisOpt.next().attr('data-depth')>thisD){
                thisOpt.attr('disabled', 'disabled');
            }            
        });
        
        $('.field-delivery').change(function(){
            var thisDelivery = $(this);
            if(thisDelivery.val() == 1){
                $('.vils').show();
            }else{
                $('.vils').hide();
            }        
        });
        var thisDelivery = $('.field-delivery:checked');
        if(thisDelivery.val() == 1){
            $('.vils').show();
        }else{
            $('.vils').hide();
        }
        
        $('.field-type_count_sale').click(function(){
            var thisType_count_sale = $(this);
            if(thisType_count_sale.val() == 1){
                $('.other_fields-type_count_sale').show();
            }else{
                $('.other_fields-type_count_sale').hide();
            }        
        })
    })");

?>
<div class="goods-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?/*= $form->field($model, 'id_category')->textInput() */?>
    <!--<select>
        <optgroup label=""
    </select>-->
    <div class="form-group field-goods-id_brand has-success">
        <label class="control-label" for="goods-id_brand">Выберите категорие</label>
            <select class="form-control" id="goods-id_category" name="Goods[id_category]">
        <?foreach($categories as $category):?>
        <?if($category['id_parent'] == 0):?>
            <option value="<?=$category['id']?>" data-depth="0" disabled><?=$category['name']?></option>
            <?else: continue;?>
            <?endif;?>
        <?foreach($categories as $category2):?>
            <?if($category2['id_parent'] == $category['id']):?>
                <option value="<?=$category2['id']?>"  data-depth="1">&nbsp;&nbsp;<?=$category2['name']?></option>
                <?else: continue;?>
                <?endif;?>
            <?foreach($categories as $category3):?>
                <?if($category2['id'] == $category3['id_parent']):?>
                    <option value="<?=$category3['id']?>" data-depth="2">&nbsp;&nbsp;&nbsp;&nbsp;<?=$category3['name']?></option>
                    <?else: continue;?>
                    <?endif;?>
                <?foreach($categories as $category4):?>
                    <?if($category3['id'] == $category4['id_parent']):?>
                        <option value="<?=$category4['id']?>" data-depth="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$category4['name']?></option>
                    <?else: continue;?>
                    <?endif;?>
                    <?endforeach;?>
                <?endforeach;?>
            <?endforeach;?>
        <?endforeach;?>
    </select>
        <div class="help-block"></div>
    </div>

    <?= $form->field($model, 'name')->textInput() ?>

    <?//echo $form->field($model, 'id_category')->dropDownList($categories, $prompt);?>

    <?/*= $form->field($model, 'id_brand')->textInput() */?>
    <?//echo $form->field($model, 'id_brand')->dropDownList($brands, $prompt);?>

    <?/*= $form->field($model, 'id_company')->textInput() */?>
    <?//echo $form->field($model, 'id_company')->dropDownList($companies, $prompt);?>

    <?/*= $form->field($model, 'id_country')->textInput() */?>
    <?/*echo $form->field($model, 'id_country')->dropDownList($countries, $prompt);*/?>

    <?/*= $form->field($model, 'id_states')->textInput() */?>
    <?//echo $form->field($model, 'id_states')->dropDownList($states, $prompt);?>

    <?//= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'count')->textInput() */?>

    <?//= $form->field($model, 'count_all')->textInput() ?>
    <div class="additional-fields"></div>

    <div class="form-group">
        <?
        $type_count_sale = $model->type_count_sale;
        //vd($type_count_sale);
        ?>
        <label class="control-label">Количество продажи</label>
        <!--<input type="hidden" name="Good[delivery]" value="">-->
        <div style="display: inline-block;">
            <input type="radio" class="field-type_count_sale" <?=(is_null($model->type_count_sale))?'checked':'';?> name="Goods[type_count_sale]" value="0" id="sht0">
            <label class="control-label" for="sht0">шт</label><br>
            <input type="radio" class="field-type_count_sale" <?=(!is_null($model->type_count_sale))?'checked':'';?> name="Goods[type_count_sale]" value="1" id="optom">
            <label class="control-label" for="optom">оптом</label>
        </div>
    </div>

    

    <div class="form-group other_fields-type_count_sale" style="display: none">
        <label  class="control-label">Минималный заказ</label>
        <input type="text" class="field-type_count_sale-count" name="Type_count_sale[count]" value="<?=$type_count_sale['count']?>">
        <input type="radio" class="field-type_count_sale-unit" <?=($type_count_sale['unit']==0)?'checked':'';?> name="Type_count_sale[unit]" value="0" id="sht1">
        <label class="control-label" for="sht1">шт</label>
        <input type="radio" class="field-type_count_sale-unit" <?=($type_count_sale['unit']==1)?'checked':'';?> name="Type_count_sale[unit]" value="1" id="kg">
        <label class="control-label" for="kg">кг</label>
        <input type="radio" class="field-type_count_sale-unit" <?=($type_count_sale['unit']==2)?'checked':'';?> name="Type_count_sale[unit]" value="2" id="litr">
        <label class="control-label" for="litr">литр</label>
        <input type="radio" class="field-type_count_sale-unit" <?=($type_count_sale['unit']==3)?'checked':'';?> name="Type_count_sale[unit]" value="3" id="metr">
        <label class="control-label" for="metr">метр</label>
    </div>

    <?= $form->field($model, 'cost')->textInput() ?>
    
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
    <div class="clear"></div>

    <div class="form-group type_sale_div">
        <label class="control-label">Тип продажи</label>
        <div style="display: inline-block;">
            <input type="checkbox" class="field-type_sale" <?=(is_array($model->type_sale) && in_array('продажа', $model->type_sale))?'checked':'';?> name="Goods[type_sale][]" value="продажа" id="prodaja">
            <label class="control-label" for="prodaja">продажа</label><br>
            <input type="checkbox" class="field-type_sale" <?=(is_array($model->type_sale) && in_array('в кредиит', $model->type_sale))?'checked':'';?> name="Goods[type_sale][]" value="в кредиит" id="vkedit">
            <label class="control-label" for="vkedit">в кредиит</label><br>
            <input type="checkbox" class="field-type_sale" <?=(is_array($model->type_sale) && in_array('в лизинг', $model->type_sale))?'checked':'';?> name="Goods[type_sale][]" value="в лизинг" id="vlizing">
            <label class="control-label" for="vlizing">в лизинг</label>
        </div>
    </div>

    <!-- <?= $form->field($model, 'manufacturer')->textInput() ?> -->

    <?//echo $form->field($model, 'id_states')->dropDownList($states, $prompt);?>

    <?/*= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) */?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 3],
        'preset' => 'full'
    ]) ?>

    <?/*= $form->field($model, 'count')->textInput() */?>

    <?/*= $form->field($model, 'old_cost')->textInput() */?>

    
    <div class="clear"></div>

    <!-- <?echo $form->field($model, 'id_currency')->dropDownList($currencies, $prompt);?> -->

    <?/*= $form->field($model, 'id_currency')->textInput() */?>
    

    <?/*= $form->field($model, 'color')->textInput(['maxlength' => true]) */?><!--

    <?/*= $form->field($model, 'size')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'like')->textInput() */?>

    <?/*= $form->field($model, 'dislike')->textInput() */?>

    <?/*= $form->field($model, 'rate')->textInput() */?>

    --><?/*= $form->field($model, 'delivery')->textInput() */?>

    <?//= $form->field($model, 'image')->fileInput() ?>
   

    <div class="goods-div-img">
        <p style="text-align: center; margin: 0;">Главная фото (<span style="color: red">Обязательно</span>)</p>
        <input type="file" name="image" id="good-image" class="good-image" style="display: none;" required>
        <label for="good-image">
            <img class="image-preview image-preview-0" id="image-preview"
                 src="<?=$imageSrc?>"/>
        </label>
        <div class="goods-close-photo"></div>
    </div>
    <ul>
        <?for($i=0; $i<6; $i++):?>
        <?if(isset($imagesArr[$i]['min'])):?>
            <li id="good-file-<?=$i?>" class="good-file hasImage">
                 <?
                    if ($i == 2) {?>
                        <div class="goods-img-mini-div-1">
                    <?}
                    else {?>
                        <div class="goods-img-mini-div-2">
                    <?}
                    ?>
                    <p style="text-align: left; margin: 0;">Фото-<?=$i+1;?></p>
                    <input type="file" name="GoodsImages[]" id="good-image-<?=$i?>" class="good-image" style="display: none;">
                    <label for="good-image-<?=$i?>">
                        <img class="image-preview" id="image-preview-<?=$i?>"
                             src="/images/goods/<?=$model->id?>/gallery/<?=$imagesArr[$i]['min']?>"
                             style="width: 100px; height: 75px;"/>
                    </label>
                    <div class="goods-close-photo" data-id="<?=$i?>"></div>
                </div>
            </li>
        <?else:?>
            <li id="good-file-<?=$i?>" class="good-file">
                <?
                    if ($i == 2) {?>
                        <div class="goods-img-mini-div-1">
                    <?}
                    else {?>
                        <div class="goods-img-mini-div-2">
                    <?}
                    ?>
                    <p style="text-align: left; margin: 0;">Фото-<?=$i+1;?></p>
                    <input type="file" name="GoodsImages[]" id="good-image-<?=$i?>" class="good-image" style="display: none">
                    <label for="good-image-<?=$i?>">
                        <img class="image-preview" id="image-preview-<?=$i?>"
                             src="/images/ads/plus1.png"
                             style="width: 100px; height: 75px;"/>
                    </label>
                    <div class="goods-close-photo" data-id="<?=$i?>"></div>
                </div>
            </li>
        <?endif;?>
        <?endfor;?>
    </ul>
    <div class="clear"></div>

    <div class="form-group">
        <label class="control-label" for="user-allowgid">Доставка</label>
        <div id="delivery">
            <input type="radio" class="field-delivery" <?=($model->delivery==0)?'checked':'';?> name="Goods[delivery]" value="0" id="goods-net">
            <label class="control-label" for="goods-net">Нет</label>
            <input type="radio" class="field-delivery" <?=($model->delivery==1)?'checked':'';?> name="Goods[delivery]" value="1" id="goods-est">
            <label class="control-label" for="goods-est">Есть</label>
        </div>
    </div>
    <div class="form-group vils" style="display: none;">
        <label class="control-label" for="user-allowgid">Выберите</label>
        <div style="display: inline-block;">
            <?
            $viloyats = Viloyat::getViloyatList();
            foreach ($viloyats as $viloyat):?>
                <div class="checkbox">
                    <?if(!is_null($delivery_vilArr) && in_array($viloyat['id_vil'], $delivery_vilArr)):?>
                        <input type="checkbox" class="field-delivery_vil" name="Goods[delivery_vil][]" checked value="<?=$viloyat['id_vil']?>" id="goods-<?=$viloyat['name']?>">
                        <label class="control-label" for="goods-<?=$viloyat['name']?>"><?=$viloyat['name']?></label>
                    <?else:?>
                        <input type="checkbox" class="field-delivery_vil" name="Goods[delivery_vil][]" value="<?=$viloyat['id_vil']?>" id="goods-<?=$viloyat['name']?>">
                        <label class="control-label" for="goods-<?=$viloyat['name']?>"><?=$viloyat['name']?></label>
                    <?endif?>

                </div>
            <?endforeach;?>
        </div>
    </div>

    <!-- <?
    echo $form->field($model, 'status')->dropDownList([
            '1' => 'Активный',
            '0' => 'Отключен',
        ]
    );
    ?> -->
    <?/*= $form->field($model, 'dcreated')->widget(
    DatePicker::className(), [
    // inline too, not bad
    'inline' => true,
    // modify template for custom rendering
    'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'dd.mm.yyyy'
    ]
]);*/?><!--

    <?/*= $form->field($model, 'bycreated')->textInput() */?>

    <?/*= $form->field($model, 'dmodified')->widget(
    DatePicker::className(), [
    // inline too, not bad
    'inline' => true,
    // modify template for custom rendering
    'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'dd.mm.yyyy'
    ]
]);*/?>

    <?/*= $form->field($model, 'bymodified')->textInput() */?>

    <?/*= $form->field($model, 'ddeleted')->widget(
    DatePicker::className(), [
    // inline too, not bad
    'inline' => true,
    // modify template for custom rendering
    'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'dd.mm.yyyy'
    ]
]);*/?>


    --><?/*= $form->field($model, 'bydeleted')->textInput() */?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?
    $this->registerJsFile('/js/goods.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
