<?
use backend\models\Viloyat;
use backend\models\Tuman;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\models\Elect;

$viloyats = Viloyat::find()->select(['name'])->where(['id_vil' => $model->id_viloyat])->asArray()->one();
$tumans = Tuman::find()->select(['name'])->where(['id_tuman' => $model->id_tuman])->asArray()->one();
$nameVil = $viloyats['name'];
$nameTum = $tumans['name'];
$images = json_decode($model->image, true);
if(is_null($images)){
	$images = [];
	$firstImage = "/images/placeHolder.png";
}else{
	$firstImage = "/images/ads/".$model->id."/".$images[0]['max'];
}
$i=0;

$ip_user = $_SERVER['REMOTE_ADDR'];
//var_dump($ip_user);
$elect = Elect::find()->where(['ip_user' => $ip_user, 'id_ad' => $model->id])->count();
$electID = Elect::find()->select('id')->where(['ip_user' => $ip_user, 'id_ad' => $model->id])->one();
$electID = $electID->id;
//vd($electID);

/*if ($elect > 0) {
	var_dump($elect);
}
else {
	echo "none";
}*/
//	var_dump($elect);

//var_dump($elect);
//vd($elect, false);
/*foreach ($elect as $key => $electfor) {
	var_dump($electfor->ip_user);
	var_dump($electfor->id);
	var_dump($electfor->id_ad);
	var_dump($electfor->date);

}*/

?>
<div style="margin-top: 20px;"></div>
<div id="content">
	<div class="floating">
		<div class="contentleft">
			<div class="ads-container">
				<div class="ads-img">
					<img src="<?=$firstImage?>" id="0" onclick="adsImgPopup(this)"/></a>
				</div>
				<div class="ads-izbranie <? if ($elect > 0) { echo "ads-izbranie1";	} else { echo "ads-izbranie0"; }?>" data-ip="<?=$_SERVER['REMOTE_ADDR']?>" data-id="<?=$model->id?>" data-deleteid="<?=$electID?>">
					<p>
						<? if ($elect > 0) { echo "Удалить"; } else { echo "В избранные"; }?>
					</p>
				</div>
				<div class="ads-information">
					<div class="ads-value-cost1">
						<?=number_format($model->cost, 0, ',', ' ')?> 
						<? if ($model->id_currency == 1) {
							echo "сум";
						}else {
							echo "у.е.";
						} ?>
						<?//=$model->id_currency?>
					</div>
					<div style="float: left;">
						<p style="color: #fff; margin: 5px 0;"><?=$model->name?><br></p>
						<p style="color: #fff; font-size: 80%; float: left;">
							<?
								echo $nameTum.', ';
								echo $nameVil;
								//vd(date('Y-m-d H:i:s', $model->dcreated));
							?><br>Добавлено: <? echo date('H:i:s d-m-Y', $model->dcreated); ?>
						</p>
					</div>
				</div>
			</div>

			<div class="ads-img-min">
				<?foreach($images as $image):?>
					<?//vd($image);?>
					<div class="ads-it">
						<img src="/images/ads/<?=$model->id?>/<?=$image['max']?>" id="<?=$i?>" alt="" onclick='adsImg(this);'/>
					</div>
					<?$i++?>
				<?endforeach;?>
			</div>

			

		</div>
	</div>


	<div class="contentright">
		<form>
			<h1 style="font-size: 120%" class="ads-h1"><?=$model->name?></h1>
			
			<div class="clear"></div>
			<div class="ads-name-cost">
				<p style="font-size: 90%">Адрес:</p>
			</div>
			<div class="ads-value">
				<?
					echo $nameTum.', ';
					echo $nameVil;
				?>
			</div>
			<div class="clear"></div>
			<div style="margin-top: 5px;"></div>
			<div class="ads-name-cost">
				<p style="font-size: 90%">Добавлено:</p>
			</div>
			<div class="ads-value">
				<? echo date('H:i:s d-m-Y', $model->dcreated); ?>
			</div>
			<div class="clear"></div>
			<div style="background: #ddd; padding-left: 5px; margin-top: 10px">
				<div class="ads-name-cost">
					<p style="font-size: 90%">Цена:</p>
				</div>
				<div class="ads-value-cost">
						<?=number_format($model->cost, 0, ',', ' ')?> 
						<? if ($model->id_currency == 1) {
							echo "сум";
						}else {
							echo "у.е.";
						} ?>
						<?//=$model->id_currency?>
				</div>
				<div class="clear"></div>
				<!-- <div style="margin-top: 10px;"></div>

				<div class="ads-name">
					<p style="font-size: 90%">Предложить цена:</p>
				</div>
				<div class="ads-value">
					<p style="font-size: 90%">
                    <form id="forum_post" class="form-vertical" action="ads/cost" method="post">
                        <?php $form = ActiveForm::begin(['action' => ['ads/cost'],'options' => ['method' => 'post']]) ?>

                        <?= Html::input('text', 'AdsCosts[cost]', null, ['class' => 'productallnumber']) ?>
                            <?= Html::radio('AdsCosts[id_currency]', 1, ['id' => 'id_currency1']);?><label for="id_currency1">Сум</label>
                            <?= Html::radio('AdsCosts[id_currency]', 2, ['id' => 'id_currency2']);?><label for="id_currency2">у.е.</label>
                            <?= Html::submitButton('Предлагать', ['class' =>'izb']) ?>
                        <?ActiveForm::end();?>
                    </form>
                        <?/*= Html::endForm(); */?>
					</p>
					<div class="clear"></div>
					<div>
						4 700 000 сум<br>
						4 600 000 сум<br>
					</div>
				</div>
				<div class="clear"></div> -->
				<div style="margin-top: 10px;"></div>
				<div class="clear"></div>
				<div style="margin-top: 10px;"></div>
			</div>

			<div class="ads-name">
				<p style="font-size: 90%">Телефон:</p>
			</div>
			<div class="ads-value">
				<p>
					<span style="font-size: 130%; color: red;">
						<?
							$phone = json_decode($model->contact_phone, true);
							if(isset($phone['contact_phone1'])){
								echo $phone['contact_phone1'];
							}
							if (isset($phone['whatsapp1'])) {?>
								<img src="/images/11.png">
							<?}
							if (isset($phone['telegram1'])) {?>
								<img src="/images/21.png">
							<?}
							echo "<br>";
							if (isset($phone['contact_phone2'])){
								echo $phone['contact_phone2'];
							}
							if (isset($phone['whatsapp2'])) {?>
								<img src="/images/11.png">
							<?}
							if (isset($phone['telegram2'])) {?>
								<img src="/images/21.png">
							<?}
							echo "<br>";
							if (isset($phone['contact_phone3'])){
								echo $phone['contact_phone3'];
							}
							if (isset($phone['whatsapp3'])) {?>
								<img src="/images/11.png">
							<?}
							if (isset($phone['telegram3'])) {?>
								<img src="/images/21.png">
							<?}
						?>
					</span>
				</p>
			</div>
			<div class="clear"></div>
			<div style="margin-top: 10px;"></div>

			<div class="ads-name">
				<p style="font-size: 90%">Контактное лицо:</p>
			</div>
			<div class="ads-value">
				<span style="font-size: 130%;"><?=$model->contact_name?></span>
			</div>
			<div class="clear"></div>
			<div style="margin-top: 10px;"></div>
			<div class="ads-name">
				<p style="font-size: 90%">Характеристики товара:</p>
			</div>
			<div class="ads-value">
				<div style="border: 1px solid #ddd; padding: 5px;">
					<table cellspacing="0" cellpadding="0" width="100%" style="font-size: 85%">
						<tr>
							<td width="50%" valign="top">
								<?foreach($goodsFields as $goodsField):?>

								<p style="padding-bottom: 5px; float: left; width: 235px;">
									<span style="color: #888"><?=$goodsField['name'];?>: </span>
									<?foreach($goodsFieldsValues as $goodsFieldsValue){
										if($goodsFieldsValue['id_goods_field'] == $goodsField['id'])
												echo $goodsFieldsValue['value'];
										}?>
									
								</p>
								<?endforeach;?>
								
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="clear"></div>
			<div class="ads-name">
				<p style="font-size: 90%">Описание:</p>
			</div>
			<div class="ads-value">
				<p><?=$model->text;?></p>
			</div>
			<div class="clear"></div>
			<div style="margin-top: 10px;"></div>

			<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px "></div>
			<div class="ads-name">
				<p style="font-size: 90%">Написать автору:</p>
			</div>
			<div class="ads-value">
				<textarea style="width: 95%; height: 80px; resize: none"></textarea>
				<input type="submit">
			</div>
			<div class="clear"></div>
			<div style="margin-top: 10px;"></div>
			<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px "></div>
			<div class="ads-name-view">
				<p style="font-size: 90%">Просмотры:</p>
			</div>
			<div class="ads-value-view">
				<p><?=$model->view;?></p>
			</div>
			<div class="clear"></div>
			<div style="margin-top: 10px;"></div>
		</form>
	</div>

	<div class="clear"></div>
	<div class="ft"></div>

	<script type="text/javascript">
	    $(function(){
	    	if ($(window).width() > 650){
		        var topPos = $('.floating').offset().top;
		        //alert(topPos);
		        $(window).scroll(function() { 
		            var top = $(document).scrollTop(),
		                pip = $('.ft').offset().top,
		                height = $('.floating').outerHeight();
		                //alert(pip);
		        		//$('.contentright').css('margin-left', '42%');
		            if (top > topPos && top < pip - height) {
		              $('.contentright').css('margin-left', '42%');
		              $('.floating').addClass('fixed').removeAttr("style");
		            }
		            else if (top > pip - height) {
		            	$('.contentright').css('margin-left', '42%');
		                $('.floating').removeClass('fixed').css({'position':'absolute', 'left':'0', 'bottom':'0'});
		            }
		            else {
		            	$('.contentright').css('margin-left', '0');
		            	$('.floating').removeClass('fixed');
		            	$('.floating').removeAttr("style");
		            }
		        });
	    	}
	    });
	</script>
</div>
<? $j=0; ?>
	<div class="ads-popup">
		<div class="ads-overlay"></div>
		<div style="max-width: 1400px; margin: auto; position: relative;">
		<h1 style="font-size: 150%; color: #fff;"><?=$model->name?></h1>
		<div class="ads-popup-img">
			<div class="ads-img-popup" id="adsimg">
				<img style="transition: all ease .5s;" src="<?=$firstImage?>" id="0"/></a>
			</div>

			<div class="ads-img-min-popup">
				<?foreach($images as $image):?>
					<div class="ads-it">
						<img src="/images/ads/<?=$model->id?>/<?=$image['max']?>" id="<?=$j?>" alt="" onclick='adsImgView(this);'/>
					</div>
					<?$j++?>
				<?endforeach;?>
			</div>
			<div class="ads-prev"></div>
			<div class="ads-next"></div>
		</div>
		<div class="ads-popup-right">
			<div class="ads-cost">
				<!-- 1 000 000 000 -->
				<?=number_format($model->cost, 0, ',', ' ')?>
				<? if ($model->id_currency == 1) {
					echo "сум";
				}else {
					echo "у.е.";
				} ?>
			</div>
			<span style="color: #999; margin: 10px 0; display: block; text-align: center">Написать автору:</span>
			<span style="display: block; text-align: center">
			<textarea style="width: 98%; height: 80px; resize: none"></textarea>
			<input type="submit" style="text-align: left">
			</span>
			<div class="clear"></div>
			<div style="border-bottom: 1px solid #555; margin-top: 10px;"></div>
			<p style="display: block; margin: 10px 0; color: #fff; font-size: 100%">
				<span class="ads-user-gray"></span><?=$model->contact_name?>
			</p>
			<div style="border-bottom: 1px solid #555;"></div>
			<?$phone = json_decode($model->contact_phone, true);?>
			<?if(isset($phone['contact_phone1'])):?>
			<div style="color: #fff; font-size: 120%; display: block; margin: 10px 0;">
				<span class="ads-mobile2-gray"></span>
				<?
					if(isset($phone['contact_phone1'])){
						echo $phone['contact_phone1'];
					}
					if (isset($phone['whatsapp1'])) {?>
						<img src="/images/11.png">
					<?}
					if (isset($phone['telegram1'])) {?>
						<img src="/images/21.png">
				<?}?>
			</div>
			<?endif;?>
			<?if(isset($phone['contact_phone2'])):?>
			<div style="color: #fff; font-size: 120%; display: block; margin: 10px 0;">
				<span class="ads-mobile2-gray"></span>
				<?
					if (isset($phone['contact_phone2'])){
						echo $phone['contact_phone2'];
					}
					if (isset($phone['whatsapp2'])) {?>
						<img src="/images/11.png">
					<?}
					if (isset($phone['telegram2'])) {?>
						<img src="/images/21.png">
				<?}?>
			</div>
			<?endif;?>
			<?if(isset($phone['contact_phone3'])):?>
			<div style="color: #fff; font-size: 120%; display: block; margin: 10px 0;">
				<span class="ads-mobile2-gray"></span>
				<?
					if (isset($phone['contact_phone3'])){
						echo $phone['contact_phone3'];
					}
					if (isset($phone['whatsapp3'])) {?>
						<img src="/images/11.png">
					<?}
					if (isset($phone['telegram3'])) {?>
						<img src="/images/21.png">
					<?}
				?>
			</div>
			<?endif;?>
			<div class="clear"></div>
			<div style="border-bottom: 1px solid #555;"></div>
			<div style="display: block; margin: 10px 0 30px 0; color: #fff; font-size: 90%">
				<span class="ads-markerloc2"></span>
				<?
					echo $nameTum.', ';
					echo $nameVil;
				?>
			</div>
			<div style="border-bottom: 1px solid #555;"></div>
		</div>
		<div class="close-ads"></div>
		</div>
	</div>