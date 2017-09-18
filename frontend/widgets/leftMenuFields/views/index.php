<?
use yii\helpers\Html;
?>
<div>
    Цена: <input type="text" placeholder="от" class="left-cost"> - <input type="text" placeholder="до" class="left-cost">
</div>
<div style="margin-top: 10px; margin-bottom: 10px; border-bottom: 1px solid #ddd"></div>
<?foreach($fields as $key => $field):?>
	<div>
        <p style="font-size: 115%;"><b><?=$field->name?></b></p>
        <p style="margin-top: 10px">
        
        <?if($field->type == 'radio' || $field->type == 'select'):?>
        	<?
        		$optionArr = explode(',', $field->option);
        		foreach ($optionArr as $key => $option) {
        			echo Html::checkbox($option, false, ['id' => $field->nameEn.$key]);//->label($option);
        			echo Html::label($option, $field->nameEn.$key);?><br><?
        		}
        	?>
    	<?elseif($field->type == 'text'):?>
    		<span><?=$field->name?> от</span><input type="text" name="<?=$field->nameEn?>[from]"><br>
    		<span><?=$field->name?> до</span><input type="text" name="<?=$field->nameEn?>[to]">
        <?endif;?>        
        </p>
    </div>
    <div class="clear"></div>
    <div style="margin-top: 10px; margin-bottom: 10px; border-bottom: 1px solid #ddd"></div>
<?endforeach;?>