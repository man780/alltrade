<?php

namespace frontend\controllers;


use Yii;
use frontend\models\Ads;
use frontend\models\AdsSearch;

use backend\models\Category;
use backend\models\GoodsFields;
use backend\models\GoodsFieldsValues;
use backend\models\Brands;
use backend\models\States;
use backend\models\Companies;
use backend\models\Currency;
use backend\models\Countries;
use backend\models\Viloyat;
use backend\models\Tuman;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/**
 * UsersController implements the CRUD actions for Ads model.
 */
class UsersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Displays a single Ads model.
     * @param integer $id
     * @return mixed
     */
    public function actionAds()
    {
        $userId = Yii::$app->user->getId();
        $this->layout = 'profile';
        $ads = Ads::find()->where(['bycreated' => $userId])->asArray()->all();
        $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

        return $this->render('ads', [
            //'model' => $model,
            'ads' => $ads,
            'layoutPath' => $layoutPath
        ]);
    }

    /**
     * Displays a single Ads model.
     * @param integer $id
     * @return mixed
     */
    public function actionMessages()
    {
        $userId = Yii::$app->user->getId();
        $this->layout = 'profile-message';
        $ads = Ads::find()->where(['bycreated' => $userId])->asArray()->all();
        $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

        return $this->render('messages', [
            //'model' => $model,
            'ads' => $ads,
            'layoutPath' => $layoutPath
        ]);
    }

    /**
     * Displays a single Ads model.
     * @param integer $id
     * @return mixed
     */
    public function actionSettings()
    {
        $userId = Yii::$app->user->getId();
        $this->layout = 'profile-setting';
        $ads = Ads::find()->where(['bycreated' => $userId])->asArray()->all();
        $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');

        return $this->render('settings', [
            //'model' => $model,
            'ads' => $ads,
            'layoutPath' => $layoutPath
        ]);
    }


    /**
     * Finds the Ads model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ads the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
