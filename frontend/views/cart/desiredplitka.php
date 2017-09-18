<?
	use yii\helpers\Url;
	use frontend\models\Desired;
	use frontend\models\Goods;
	use backend\models\Companies;
	$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

	$ip_user = $_SERVER['REMOTE_ADDR'];
	$desired = Desired::find()->select('id, id_good')->where(['ip_user' => $ip_user])->orderBy('date DESC')->all();
?>
<div style="margin-top: 10px;"></div>
<div id="content">
	<h4 style="margin: 0; padding: 10px 5px; float: left">Желаемые</h4>
	<p>    
	    <span style="float: right; margin-top: 10px; margin-right: 5px; margin-bottom: 5px;"><a href="<?=Url::toRoute(['/cart/desiredplitka']);?>" style=""><img src="<?=$layoutPath?>/images/category/list1.png"></a></span>
	    <span style="float: right; margin-right: 15px; margin-top: 10px; margin-bottom: 5px;"><a href="<?=Url::toRoute(['/cart/desired']);?>"><img src="<?=$layoutPath?>/images/category/list2.png"></a></span>
	    <span style="float: right; margin-top: 8px; margin-right: 10px; font-weight: bold;">Вид:</span>
	</p>
	<div class="clear"></div>

	<ul class="desiredplitkacontainer">
		<? 
			foreach ($desired as $key => $desired1):
				$id = $desired1->id;
				if (Goods::findOne($desired1->id_good) !== null) {
		            $model = Goods::findOne($desired1->id_good);
		        } else {
		            $model = null;
		        }
		        if ($model):
		        	$idCompany = $model->id_company;
		        	$nameComoany = Companies::find()->select('name')->where(['id' => $idCompany])->one();
		        	$nameComoany = $nameComoany->name;
		        	$imageArr = json_decode($model->image, true);
					if(is_array($imageArr)){
					    $image = '/images/goods/'.$model->id.'/'.$imageArr['min'];
					}else{
					    $image = '/images/placeHolder.png';
					}
		?>
					<li class="desiredplitkagoods">
						<a href="<?=Url::toRoute(['/goods/view', 'id' => $model->id]);?>" style="color: #000; text-decoration: none;">
							<p class="desiredplitkagoodsp"><img class="desiredplitkagoodsimg" src="<?=$image?>"></p>
							<div style="padding-left: 10px; padding-right: 10px;">
								<p class="desiredplitkagoodspp">
									<b><?=$model->name?></b>
								</p>
								<div class="desiredplitkadiv">
									<? if ($model->discount): ?>
										<p>
											<span style="color: red; font-size: 120%;"><?=number_format($model->cost, '0', ',', ' ');?> <?=($model->id_currency == 1)?'сум':'у.е.';?></span> / шт.
										</p>
										<p>
											<span style="text-decoration: line-through; font-size: 80%;"><?=number_format($model->old_cost, '0', ',', ' ');?> <?=($model->id_currency == 1)?'сум':'у.е.';?> / шт.</span>
											<span style="background: red; color: #fff; padding: 0px 2px; margin-left: 3px;">-<?=$model->discount?>%</span>
										</p>
									<? else: ?>
										<p>
											<span style="color: red; font-size: 120%;"><?=number_format($model->cost, '0', ',', ' ');?> <?=($model->id_currency == 1)?'сум':'у.е.';?></span> / шт.
										</p>
										<p>
											&nbsp;
										</p>
									<? endif; ?>
								</div>
							</div>
						</a>
						<p style="text-align: center; padding: 10px 0;">
							<a href="javascript:void(0)" class="qualityMarklink" data-id="<?=$id?>" data-ip="<?=$ip_user?>">Удалить</a>
						</p>
					</li>
		<?
				endif;
			endforeach; 
		?>
	</ul>
</div>
<script type="text/javascript">
	$(function(){
		$('.qualityMarklink').click(function(){
			var id = $(this).attr('data-id');
			var ip = $(this).attr('data-ip');
			$.ajax({
	            url: '/cart/desireddelete',
	            type: 'get',
	            data: {
	            	ip_user: ip,
	            	id_delete: id
	            },
	            success: function (data) {
	                if(data){
	                    location.reload();
	                }
	            }
	        });
		});
	});
</script>