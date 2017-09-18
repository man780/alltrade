<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/2/16
 * Time: 4:18 PM
 * To change this template use File | Settings | File Templates.
 */
if(is_null($model->cats)){
    $model->cats = [];
}
?>
<style type="text/css">
    ul, li {
        list-style: none;
        transition: all 0.5s ease;
    }
    .checker {
        float: left;
    }
    .cat-plus::before {
        content: '+';
        color: #fff;
        background: green;
        padding: 0px 5px;
        margin-right: 10px;
    }
    .cat-minus::before {
        content: '-';
        color: #fff;
        background: red;
        padding: 0px 5px;
        margin-right: 10px;
    }
    #w0 ul ul {
        display: none;
    }
    .level-1:parent {
        margin-left: 10px;
    }
    @media (max-width: 800px) {
        .cat-plus::before {
            padding: 2px 7px;
        }
        .cat-minus::before {
            padding: 2px 9px;
        }
        input[type=checkbox] {
            float: left;
            margin-right: 8px;
            margin-top: 6px;
        }
        label {
            display: block;
            line-height: 25px;
        }
    }
</style>
<h1>Выберите категории</h1>
    <?php $form = ActiveForm::begin(); ?>
    <ul>
    <?foreach($categories['parentCat'] as $parentCat):?>
        <li>
            <?/*vd([$parentCat['id'], $model->cats]);*/?>
            <?if(!is_null($model->cats) && in_array($parentCat['id'], $model->cats)){?>
            <input id="cat-<?=$parentCat['id']?>" type="checkbox" name="Cats[]" value="<?=$parentCat['id']?>" checked="checked" class="level-1"/>
            <?}else{?>
            <input id="cat-<?=$parentCat['id']?>" type="checkbox" name="Cats[]" value="<?=$parentCat['id']?>" class="level-1"/>
            <?}?>
            <label for="cat-<?=$parentCat['id']?>"><?=$parentCat['name']?></label>
            

            <?if(!is_array($categories['bottomCat'][$parentCat['id']])) continue;?>
            <ul>
            <?foreach($categories['bottomCat'][$parentCat['id']] as $key => $bottomCat):?>
                <li>
                    <?if(in_array($bottomCat['id'], $model->cats)){?>
                    <input id="cat-<?=$bottomCat['id']?>" type="checkbox" name="Cats[]" value="<?=$bottomCat['id']?>" checked="checked" class="level-2"/>
                    <?}else{?>
                    <input id="cat-<?=$bottomCat['id']?>" type="checkbox" name="Cats[]" value="<?=$bottomCat['id']?>" class="level-2"/>
                    <?}?>
                    <label for="cat-<?=$bottomCat['id']?>" class="cat-border"><?=$bottomCat['name']?></label>
                    <ul>
                    <?foreach($categories['categories'] as $category):?>
                        <?if($category['id_parent'] != $bottomCat['id'])continue;?>
                        <li>
                            <?if(in_array($category['id'], $model->cats)){?>
                            <input id="cat-<?=$category['id']?>" type="checkbox" name="Cats[]" value="<?=$category['id']?>" checked="checked" class="level-3"/>
                            <?}else{?>
                            <input id="cat-<?=$category['id']?>" type="checkbox" name="Cats[]" value="<?=$category['id']?>" class="level-3"/>
                            <?}?>
                            <label for="cat-<?=$category['id']?>" class="cat-border"><?=$category['name']?></label>
                            <ul>
                                <?foreach($categories['categories'] as $category4):?>
                                <?if($category4['id_parent'] != $category['id'])continue;?>
                                <li>
                                    <?if(in_array($category4['id'], $model->cats)){?>
                                    <input id="cat-<?=$category4['id']?>" type="checkbox" name="Cats[]" value="<?=$category4['id']?>" checked="checked" class="level-4"/>
                                    <?}else{?>
                                    <input id="cat-<?=$category4['id']?>" type="checkbox" name="Cats[]" value="<?=$category4['id']?>" class="level-4"/>
                                    <?}?>
                                    <label for="cat-<?=$category4['id']?>" class="cat-border"><?=$category4['name']?></label>
                                </li>

                                <?endforeach;?>
                            </ul>
                        </li>

                    <?endforeach;?>
                    </ul>
                </li>
            <?endforeach;?>
            </ul>
        </li>
    <?endforeach?>
    </ul>
<div class="form-group">
    <?= Html::submitButton('Выбрать', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
<?
    $this->registerJsFile('/js/js.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>