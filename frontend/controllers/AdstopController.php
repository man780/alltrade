<?php

namespace frontend\controllers;

use frontend\models\Ads;
use yii\data\Pagination;
use backend\models\Category;

class AdstopController extends \yii\web\Controller
{
    public function actionIndex($id_cat = null)
    {
        $categories = Category::getCategoriesSubsidiary($id_cat);
        if ($id_cat == null) {
            $ads = Ads::find()->where(['status' => 1])->orderBy('view DESC');
        }
        else {
            $category = $categories[0];
            $ads = Ads::find()->where(['status' => 1, 'id_category' => $category]);
            foreach ($categories as $key => $category) {
                $ads->orWhere(['status' => 1, 'id_category' => $category]);
            }
            $ads->orderBy('view DESC');
        }

    	$this->layout = 'adstop';
        $pagination = new Pagination([
    		'defaultPageSize' => 12,
    		'totalCount' => $ads->count()
    	]);

    	$ads = $ads->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('index', [
            'ads' => $ads,
            'pagination' => $pagination,
            'id_cat' => $id_cat
        ]);
    }

}
