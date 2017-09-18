<?
    use \backend\models\Companies;
    use yii\helpers\Url;
    use frontend\models\Category;


    $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

?>
<div style="margin-top: 10px"></div>
<h2 style="margin: 0; padding: 10px">Любимые магазины</h2>
<div style="border-bottom: 1px solid #ddd;"></div>
<div class="favorite-container">
    <? 
        if ($subscribes):
            foreach ($subscribes as $key => $subscribe):
                //vd($subscribe, false);
                $company = Companies::find()->where(['id' => $subscribe->id_shop])->one();
                //vd($company, false);
    ?>
                <div class="favorite-container-left">
                    <div class="favorite-logo">
                        <?
                            if($company->image){
                                $image = '/images/companies/'.$company->id.'/'.$company->image;
                            }
                            else {
                                $image = $layoutPath.'/images/shop-placeholder.png';
                            }
                        ?>
                        <a href="<?=Url::to(['/eshop/shop', 'id' => $company->id])?>" class="a"><img src="<?=$image?>"></a>
                    </div>
                    <div class="favorite-name">
                        Магазин: <b><a href="<?=Url::to(['/eshop/shop', 'id' => $company->id])?>" class="a"><?=$company->name;?></a></b>
                    </div>
                    <div class="favorite-date">
                        Дата регистрация: <b><? echo date('d.m.Y', $company->dcreated) ?></b>
                    </div>
                    <div class="favorite-address">
                        Адрес: <b><?=$company->address ?></b>
                    </div>
                    <div class="favorite-tel">
                        Телефон: <b><?=$company->phone ?></b>
                    </div>
                    <div>
                        <?
                            if ($company->cats) {
                                $category_ids = json_decode($company->cats, true);
                                $category_id = $category_ids[0];
                                $category = Category::find()->where(['id' => $category_id])->one();
                            }
                        ?>
                        Основные товары: <b><?=$category->name; ?></b>
                    </div>
                    <div class="favorite-del">
                        <? //vd($subscribe, false) ?>
                        <a href="<?=Url::to(['/eshop/favoritedelete', 'id' => $subscribe->id])?>" class="a">
                            <span>Удалить</span>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div><!-- 
                <div class="favorite-container-right">
                    <div class="favorite-goods">
                        <a href="" class="a">
                            <p>
                                Новинки (1)
                            </p>
                        </a>
                        <a href="" class="a">
                            <p>
                                Со скидками (129)
                            </p>
                        </a>
                        <a href="" class="a">
                            <p>
                                Лидеры продаж (211)
                            </p>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div> -->
                <div class="clear"></div>
                <div style="border-bottom: 1px solid #ddd; margin: 10px 0;"></div>
    <? 
            endforeach;
        endif;
    ?>
</div>