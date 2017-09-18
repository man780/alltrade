<?
$images = json_decode($model->image, true);
//vd($images);
if(is_null($images)){
	$images = [];
	$firstImage = "/images/placeHolder.png";
}else{
    //vd($images);
	$firstImage = "/images/ads/".$model->id."/".$images[0]['max'];
}
?>
<div id="content">
	<div class="floating">
		<div class="contentleft">


			<div class="img">
				<a href="<?=$firstImage?>"  rel="example_group" id="adpdp14">
				<img src="<?=$firstImage?>" id="dp14" style="margin-bottom: 3px; max-width: 100%;" alt="" /></a>
			</div>
			<div class="thumbs">
	                <?foreach($images as $image):?>
                <?//vd($image);?>
			        	<div class="it">		            
			                <a style="display:none;" href="/images/ads/<?=$model->id?>/<?=$image['max']?>" rel="example_group"></a>
							<img src="/images/ads/<?=$model->id?>/<?=$image['min']?>" onclick='setBigImage(this);' alt="" />
			        	</div>
	                <?endforeach;?>					            
		    </div>
			
		</div>
	</div>

	<div class="contentright">
		<form>
			<h1 style="font-size: 120%"><?=$model->name?></h1>
			
			<div class="clear"></div>
			<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px;"></div>
			<div style="background: #ddd;">
				<div class="ads-name">
					<p style="font-size: 90%">Цена:</p>
				</div>
				<div class="ads-value">
					<p>
						<span style="font-size: 130%; color: red;"><?=number_format($model->cost, 0, ',', ' ')?>
						<? if ($model->id_currency == 1) {
							echo "Сум";
						}else {
							echo "$";
						} ?>
						<?//=$model->id_currency?></span>
					</p>
				</div>
				<div class="clear"></div>
				<div style="margin-top: 10px;"></div>

				<div class="ads-name">
					<p style="font-size: 90%">Предложить цена:</p>
				</div>
				<div class="ads-value">
					<p style="font-size: 90%">
						<input type="text" class="productallnumber"><input type="submit" value="Предлагать" class="izb">
					</p>
					<div class="clear"></div>
					<div>
						4 700 000 сум<br>
						4 600 000 сум<br>
					</div>
				</div>
				<div class="clear"></div>
				<div style="margin-top: 10px;"></div>

				<div>
					<button class="izb">В избранные</button>
				</div>
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
							//vd($model->contact_phone,false);
							$phone = explode('|||', $model->contact_phone);
							//vd($phone, false);
							$phoneCount = count($phone);
							//echo $phoneCount;
							for ($i=0; $i < $phoneCount; $i++) { 
								echo '+'.$phone[$i].'<br>';
							}
							//vd($model, false);
							$phoneattr = explode('|||', $model->contact_phone_attributes);
							//vd($phoneattr, false);
							echo $phoneattr[0];
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
				<p style="font-size: 90%">Описание:</p>
			</div>
			<div class="ads-value">
				<p><?=$model->text;?></p>
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
			<!-- <div style="margin-top: 10px;"></div> -->

			<div class="ads-name">
				<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px "></div>
				<p style="font-size: 90%">Написать автору:</p>
			</div>
			<div class="ads-value">
				<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px "></div>
				<textarea style="width: 100%; height: 80px; resize: none"></textarea>
				<input type="submit">
			</div>
			<div class="clear"></div>
			<div style="margin-top: 10px;"></div>

			<div class="ads-name">
				<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px "></div>
				<p style="font-size: 90%">Просмотры:</p>
			</div>
			<div class="ads-value">
				<div style="border-bottom: 1px solid #ddd; margin-top: 10px; margin-bottom: 10px "></div>
				<p><?=$model->view?></p>
			</div>
			<div class="clear"></div>
			<div style="margin-top: 10px;"></div>
		</form>
	</div>

	<div class="clear"></div>
	<div class="ft"></div>

	<script type="text/javascript">
	    $(function(){
	    	if ($(window).width() > 401){
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