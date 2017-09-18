<?
	use yii\helpers\Url;
	use backend\models\Category;
	use frontend\models\Ads;

	$categories = Category::getCategories4F($id);
	$bottomCat2 = $categories['categories'];
?>
<?
	if ($id == 1) {
		$i=1;
	}
	elseif ($id == 2) {
		$i = 100;
	}
	else {
		$i = 1000;
	}
?>
<div style="margin-top: 10px;"></div>
<h2 style="color: red; margin: 0; padding: 5px;">Карта AllTrade</h2>
<div style="border-bottom: 1px solid red;"></div>

<div class="sitemap-top-menu">
	<ul>
		<a href="<?=Url::toRoute(['/footer/sitemap/', 'id' => '2']);?>">
			<? if ($id == 2): ?>
				<li class="sitemap-top-menu-active">
			<? else: ?>
				<li>
			<? endif; ?>
				Интернет Магазины
			</li>
		</a>
		<a href="<?=Url::toRoute(['/footer/sitemap/', 'id' => '1']);?>">
			<? if ($id == 1): ?>
				<li class="sitemap-top-menu-active">
			<? else: ?>
				<li>
			<? endif; ?>
				Доска объявлений
			</li>
		</a>
		<a href="<?=Url::toRoute(['/footer/sitemap/', 'id' => '3']);?>">
			<? if ($id == 3): ?>
				<li class="sitemap-top-menu-active">
			<? else: ?>
				<li>
			<? endif; ?>
				Услуги
			</li>
		</a>
	</ul>
</div>

<div class="sitemap-container">
	<?foreach($categories['parentCat'] as $key => $category):?>
		<?$bottomCat = $categories['bottomCat'][$key];?>
		<div class="sitemap-menu">
			<p class="category<?=$i;?>"><?=$category['name']?></p>
			<?
			    $i++;
			    if($bottomCat == null)continue;
			?>
			<ul class="sitemap-submenu">
				<?foreach($bottomCat as $k => $cat):?>
					<li>
						<a href="<?=Url::toRoute(['/category/view/', 'id' => $cat['id']]);?>">
							<?
								$id_cat = $cat['id'];
								$categories33 = Category::getCategoriesSubsidiary($id_cat);
					            
					            $category33 = $categories33[0];
					            $ads = Ads::find()->where(['status' => 1, 'id_category' => $category]);
					            foreach ($categories33 as $key => $category33) {
					                $ads->orWhere(['status' => 1, 'id_category' => $category33]);
					            }
					            $model = $ads->count();


								//$model = Ads::find()->where(['id_category' => $cat['id']])->count();
							?>
							<?=$cat['name']?> (<?=$model;?>)
						</a>
						<ul class="sitemap-subsubmenu">
							<?if($bottomCat2)?>
							<?foreach($bottomCat2 as $bCat2):?>
								<?if($bCat2['id_parent'] == $cat['id']):?>
									<li>
										<a href="<?=Url::toRoute(['/category/view/', 'id' => $bCat2['id']]);?>">
											<?
												$model = Ads::find()->where(['id_category' => $bCat2['id']])->count();
											?>
											<?=$bCat2['name']?> (<?=$model;?>)

										</a>
									</li>
								<?endif;?>
							<?endforeach;?>
						</ul> 
					</li>
				<?endforeach;?>
			</ul>
		</div>
	<?endforeach;?>
</div>
<div class="clear"></div>

<script type="text/javascript">
    $(function() {
        $('.sitemap-container').isotope({
            itemSelector: '.sitemap-menu'
        });
    });
</script>