<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;
use backend\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel app\models\GoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Goods');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Goods'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?//vd(ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name'));?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            //'id_category',\
            [
                'attribute'=>'id_category',
                'filter'=>ArrayHelper::map(Category::getCategoryListByCompany(), 'id', 'name'),
                'value'=>function ($model, $index, $widget) { return $model->category->name; }
            ],
            'id_brand',
            //'id_company',
            //'id_country',
            'id_states',
            'name',
            // 'description',
            // 'text:ntext',
            // 'count',
            'count_all',
            // 'old_cost',
            'cost',
            [
                'attribute' => 'id_currency',
                'value' => function ($model, $index, $widget) { if($model->id_currency==1)return "Сум";else return "у/е";},
            ],
            //'id_currency',
            // 'color',
            // 'size',
            // 'like',
            // 'dislike',
            // 'rate',
            // 'delivery',
            // 'image',
            // 'gallery:ntext',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => \yii\grid\ActionColumn::className(),
                'buttons'=>[
                    'slide'=>function ($url, $model) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['goods/slide','id'=>$model['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<img src="/images/admin/1.png" style="display: inline-block; max-width:50px;">', $customurl,
                            ['title' => Yii::t('yii', 'Слайд'), 'data-pjax' => '0']);
                    },
                    'promotion'=>function ($url, $model) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['goods/promotion','id'=>$model['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<img src="/images/admin/2.png" style="display: inline-block; max-width:50px;">', $customurl,
                            ['title' => Yii::t('yii', 'Акция'), 'data-pjax' => '0']);
                    },
                    'bestsale'=>function ($url, $model) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['goods/bestsale','id'=>$model['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<img src="/images/admin/3.png" style="display: inline-block; max-width:50px;">', $customurl,
                            ['title' => Yii::t('yii', 'Хит продаж'), 'data-pjax' => '0']);
                    },
                    'discount'=>function ($url, $model) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['goods/discount','id'=>$model['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<img src="/images/admin/4.png" style="display: inline-block; max-width:50px;">', $customurl,
                            ['title' => Yii::t('yii', 'Скидка'), 'data-pjax' => '0']);
                    }
                ],
                'template'=>'{slide} {promotion} {bestsale} {discount}',
            ]
        ],
    ]); ?>

</div>
