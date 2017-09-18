<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Ads */

$this->title = Yii::t('app', 'Create Ads');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-create">
    
    <h4 style="text-align: center"><?=Yii::t('app', 'Create Ad')?></h4>

    <div style="border-bottom: 1px solid #ddd; margin-bottom: 5px;"></div>

    <?= $this->render('_form', [
    	'categories' => $categories,
        'brands' => $brands,
        'states' => $states,
        'companies' => $companies,
        'countries' => $countries,
        'currencies' => $currencies,
        'viloyats' => $viloyats,
        'tumans' => $tumans,
        'model' => $model,
    ]) ?>

</div>
