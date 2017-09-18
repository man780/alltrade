<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\GoodsFields */

$this->title = Yii::t('app', 'Create Goods Fields');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Fields'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'categories' => $categories,
        'model' => $model,
    ]) ?>

</div>
