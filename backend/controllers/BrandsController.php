<?php

namespace backend\controllers;

use Yii;
use backend\models\Brands;
use backend\models\BrandsSearch;
use backend\models\Category;

use backend\models\UploadForm;
use yii\web\UploadedFile;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BrandsController implements the CRUD actions for Brands model.
 */
class BrandsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Brands models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BrandsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Brands model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Brands model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Brands();
        $categories = Category::getCategoryList();

        if ($model->load(Yii::$app->request->post())) {

            $post= Yii::$app->request->post('Brands');
            $model->id_category = $post['id_category'];            
            if($model->save()){
                $model->image = \yii\web\UploadedFile::getInstance($model, 'image');
                if($model->image){
                    $path = Yii::getAlias('@webroot/images').$model->image->baseName.'.'.$model->image->extension;
                    $model->image->saveAs($path);
                    $model->attachImage($path);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                vd($model->errors);
            }

        } else {
            return $this->render('create', [
                'categories' => $categories,
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Brands model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $categories = Category::getCategoryList();

        if ($model->load(Yii::$app->request->post())) {
            $model->image = \yii\web\UploadedFile::getInstance($model, 'image');

            //$image = $model->getImage(0);
            //vd($image->getPathToOrigin());
            //$model->removeImage($image);
            if($model->image){
                $path = Yii::getAlias('@webroot/images').$model->image->baseName.'.'.$model->image->extension;
                $model->image->saveAs($path);
                $model->attachImage($path);
            }

            $post= Yii::$app->request->post('Brands');
            $model->id_category = $post['id_category'];            
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                vd($model->errors);
            }

        } else {
            return $this->render('update', [
                'categories' => $categories,
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Brands model.
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
     * Finds the Brands model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Brands the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Brands::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
