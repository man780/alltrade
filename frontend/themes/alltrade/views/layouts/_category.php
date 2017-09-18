<div id="leftmenu">
	<ul style="margin: 0; padding: 0;">
		<?$i=1;?>
		             <?//vd($categories['categories']);?>
        <?foreach($categories['parentCat'] as $key => $category):?>        
        
        <?$bottomCat = $categories['bottomCat'][$key];?>
        <li>
			<p class="category<?=$i;?> category-<?=$category['id']?>">
			<a href="javascript:void(0);" class="ared"><?=$category['name']?></a></p>
			<!-- /category/view/?id=<?//=$category['id']?> -->
			<?
				$i++;
				if($bottomCat == null)continue;
			?>
			<ul class="leftmenusub">
                <?foreach($bottomCat as $k => $cat):?>
				    <li>
				    	<a href="/category/view/?id=<?=$cat['id']?>"><?=$cat['name']?></a>
			    	</li> 
                <?endforeach;?>
			</ul>
		</li>		
        <?endforeach;?>
	</ul>
</div>