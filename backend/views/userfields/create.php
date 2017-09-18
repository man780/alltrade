<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserFields */

$this->title = Yii::t('app', 'Create User Fields');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Fields'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
