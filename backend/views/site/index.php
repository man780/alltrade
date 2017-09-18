<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/*$this->title = 'Alltrade: Admin';*/
$this->title = $company->name;
?>
<div class="site-index">
    <!-- <h2><?=$company->name;?></h2> -->
    <div>
        <a href="<?=Url::toRoute(['update-company'])?>" class="detail">Изменить информации магазина</a><br>
        <a href="<?=Url::toRoute(['companies/change-template'])?>" class="detail">Изменить шаблон</a><br>
        <a href="<?=Url::toRoute(['companies/select-cat'])?>" class="detail">Выбрать категории</a><br>
        <a href="<?=Url::toRoute(['goods/create'])?>" class="detail">Добавить товары</a><br>
    </div>
</div>
