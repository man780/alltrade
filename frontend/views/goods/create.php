<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = Yii::t('app', 'Create Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-create">

    <h4><?=Yii::t('app', 'Create Good')?></h4>

    <?= $this->render('_form', [

        'categories' => $categories,
        'brands' => $brands,
        'states' => $states,
        'companies' => $companies,
        'countries' => $countries,
        'currencies' => $currencies,
        'model' => $model,
    ]) ?>

</div>
