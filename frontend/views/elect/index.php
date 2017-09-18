<?
	$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

	use frontend\models\Elect;
	use frontend\models\Ads;
	use yii\helpers\Url;

	$ip_user = $_SERVER['REMOTE_ADDR'];
	$elect = Elect::find()->select('id, id_ad')->where(['ip_user' => $ip_user])->all();
?>
<div style="margin-top: 10px"></div>
<h2 style="margin: 0; padding: 10px;">Избранные объявления</h2>
<ul class="electplitkacontainer">
	<? 
		foreach ($elect as $key => $elect1):
	        $id = $elect1->id;
			if (Ads::findOne($elect1->id_ad) !== null) {
	            $model = Ads::findOne($elect1->id_ad);
	        } else {
	            $model = null;
	        }
	        //vd($model, false);
	        if ($model):
	        	$imageArr = json_decode($model->image, true);
				if(is_array($imageArr)){
				    $image = '/images/ads/'.$model->id.'/'.$imageArr[0]['min'];
				}else{
				    $image = '/images/placeHolder.png';
				}
	?>
				<li class="electplitkagoods">
					<a href="<?=Url::toRoute(['ads/view', 'id' => $model->id]);?>" class="a">
						<div class="electplitkagoodsp"><img class="desiredplitkagoodsimg" src="<?=$image;?>"></div>
						<div style="padding-left: 10px; padding-right: 10px;">
							<div class="electplitkagoodspp">
								<?=$model->name;?>
							</div>
							<div class="electplitkadiv">
								<div>
									<b>
										<?=$model->cost?>
							        	<? if ($model->id_currency == 1) {
											echo "сум";
										}else {
											echo "у.е.";
										} ?>
									</b>
								</div>
							</div>
						</div>
					</a>
					<div style="text-align: center; padding: 10px 0;">
						<span class="qualityMarklink" style="cursor: pointer;" data-link="<?=Url::toRoute(['elect/deleteelect', 'id' => $id]);?>">Удалить</span>
					</div>
				</li>
	<?
			endif;
		endforeach 
	?>
</ul>

<script type="text/javascript">
	$(function(){
		$('.qualityMarklink').click(function(){
			document.location.href = $(this).attr('data-link');
		});
	});
</script>