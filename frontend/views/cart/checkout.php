<?
	use yii\widgets\ActiveForm;
	use yii\helpers\Html;
	//vd(json_decode($carts, true), false);
	//vd($id_user, false);
?>
<h3 style="margin: 20px 0 0 0; text-align: center; background: #ddd; color: #fff">
	<span class="checkout-title-active">Оформить заказ</span>
	<span class="checkout-title-inactive">Готово</span>
	<div class="clear"></div>
</h3>
<div class="ads-form">
    
    <?php $form = ActiveForm::begin(['options' => [
                'class' => 'contact_form'
             ]]); ?>
    
    <div class="form-group">
	    <?= $form->field($model, 'id_user')->hiddenInput(['value' => $id_user])->label('')?>
	    <?= $form->field($model, 'name',  [
	                'template' => '{label}{input}<span class="form_hint">Введите вашего полное имя</span>{error}{hint}'
	                ])->textInput(['maxlength' => true, 'required' => 'required']) ?>
	    
	    <div class="clear"></div>
	    <div style="border-bottom: 1px solid #ddd;"></div>

	    <?= $form->field($model, 'id_viloyat')->hiddenInput()->label('');?>
	    <?= $form->field($model, 'id_tuman')->hiddenInput()->label('');?>
	    <?=\frontend\widgets\viloyatTuman4Form\ViloyatTuman4FormWidget::widget(['id_viloyat' => $model->id_viloyat, 'id_tuman' => $model->id_tuman]);?>

	    <div class="clear"></div>
	    <div style="border-bottom: 1px solid #ddd;"></div>

	    <?= $form->field($model, 'address')->textInput(['required' => 'required']) ?>

	    <div class="clear"></div>
	    <div style="border-bottom: 1px solid #ddd;"></div>

	    <?= $form->field($model, 'postcode')->textInput(['required' => 'required']) ?>

	    <div class="clear"></div>
	    <div style="border-bottom: 1px solid #ddd;"></div>

	    <?= $form->field($model, 'phone')->textInput(['required' => 'required', 'id' => 'validatePhone']) ?>

	    <?= $form->field($model, 'orders')->hiddenInput(['value' => $carts])->label('')?>

	    <div class="clear"></div>
	    <div style="border-bottom: 1px solid #ddd;"></div>

	    <div class="form-group">
	    	<label></label>
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Отправить') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'qualityMarklink' : 'qualityMarklink']) ?>
	    </div>
	</div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
	$(function(){
		$('#validatePhone').mask("+998 (00) 000-00-00");
	});
</script>