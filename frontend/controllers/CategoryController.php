<?php

namespace frontend\controllers;

use Yii;
//use frontend\models\Category;
use backend\models\Category;
use frontend\models\CategorySearch;
use frontend\models\AdsSearch;
use frontend\models\GoodsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
     * Lists all Category models. Pltka
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->layout = 'categorylist';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
    /**
     * Lists all Ads models.
     * @return mixed
     */
    public function actionList($id)
    {
        $categories = Category::getCategories4F(1);

        $searchModelAds = new AdsSearch();
        
        $queryParams = Yii::$app->request->queryParams;

        $childCategories = Category::getChildCategories($id);
        //vd($childCategories);

        foreach ($childCategories as $key => $childCategory) {
            $ids[] = $childCategory['id'];
        }

        $listAdsDataProvider = $searchModelAds->search(['id_category'=>$queryParams['id'], 'id_categories' => $ids]);

        $this->layout = 'categorylist';

        return $this->render('list', [
            'categories' => $categories,
            'model' => $this->findModel($id),
            'searchModel' => $searchModelAds,
            'listDataProvider' => $listAdsDataProvider,
        ]);
    }    

    /**
     * Displays a single Category model.
        Plitka
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $categories = Category::getCategories4F(2);

        $searchModelAds = new AdsSearch();
        
        $queryParams = Yii::$app->request->queryParams;

        $childCategories = Category::getChildCategories($id);
        //vd($childCategories);

        foreach ($childCategories as $key => $childCategory) {
            $ids[] = $childCategory['id'];
        }

        $listAdsDataProvider = $searchModelAds->search(['id_category'=>$queryParams['id'], 'id_categories' => $ids]);

        //vd($listAdsDataProvider);

        //header('Content-Type: text/html; charset=utf-8');
        //vd($listAdsDataProvider, false);
        //vd($this->findModel($id), false);
        $this->layout = 'categorylist';

        return $this->render('view', [
            'categories' => $categories,
            'model' => $this->findModel($id),
            'searchModel' => $searchModelAds,
            'listDataProvider' => $listAdsDataProvider,
        ]);
    }

    public function actionVieweshop($id)
    {
        $categories = Category::getCategories4F(2);

        $searchModelAds = new GoodsSearch();
        
        $queryParams = Yii::$app->request->queryParams;

        $childCategories = Category::getChildCategories($id);

        foreach ($childCategories as $key => $childCategory) {
            $ids[] = $childCategory['id'];
        }

        $listAdsDataProvider = $searchModelAds->search(['id_category'=>$queryParams['id'], 'id_categories' => $ids]);
        //vd($listAdsDataProvider, false);
        
        $this->layout = 'categoryeshop';

        return $this->render('vieweshop', [
            'categories' => $categories,
            'model' => $this->findModel($id),
            'searchModel' => $searchModelAds,
            'listDataProvider' => $listAdsDataProvider,
        ]);
    }

    public function actionListeshop($id)
    {
        $categories = Category::getCategories4F(2);

        $searchModelAds = new GoodsSearch();
        
        $queryParams = Yii::$app->request->queryParams;

        $childCategories = Category::getChildCategories($id);
        //vd($childCategories);

        foreach ($childCategories as $key => $childCategory) {
            $ids[] = $childCategory['id'];
        }

        $listAdsDataProvider = $searchModelAds->search(['id_category'=>$queryParams['id'], 'id_categories' => $ids]);

        $this->layout = 'categoryeshop';

        return $this->render('listeshop', [
            'categories' => $categories,
            'model' => $this->findModel($id),
            'searchModel' => $searchModelAds,
            'listDataProvider' => $listAdsDataProvider,
        ]);
    }  

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
