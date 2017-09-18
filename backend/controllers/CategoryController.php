<?php

namespace backend\controllers;

use Yii;
use backend\models\Category;
use backend\models\Menu;
use backend\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();
        $categories = Category::getCategoryList();
        $menu = Menu::getList();

        if ($model->load(Yii::$app->request->post()) ) {
            $post = Yii::$app->request->post('Category');
            if($post['id_menu'] == '' && $model->id_parent != 0){
                $parents_model = $this->findModel($model->id_parent);
                $id_menu = $parents_model->id_menu;//parents_id_menu
                $model->id_menu = $id_menu;
            }else{
                $model->id_menu = $post['id_menu'];
            }
            
            if($model->save())
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'menu' => $menu,
                'categories' => $categories,
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
        $categories = Category::getCategoryList();
        $menu = Menu::getList();

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post('Category');

            if($post['id_menu'] == '' && $model->id_parent != 0){
                $parents_model = $this->findModel($model->id_parent);
                $id_menu = $parents_model->id_menu;//parents_id_menu
                $model->id_menu = $id_menu;
            }else{
                $model->id_menu = $post['id_menu'];
            }
            
            if($model->save())
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $model->dcreated = date('d.m.Y', $model->dcreated);
            $model->dmodified = date('d.m.Y', $model->dmodified);
            $model->ddeleted = date('d.m.Y', $model->ddeleted);
            //if(is_null())
            return $this->render('update', [
                'menu' => $menu,
                'categories' => $categories,
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
        $model = $this->findModel($id)->delete();
        /*$model->ddeleted = time();
        $model->bydeleted =  Yii::$app->user->getId();
        if($model->save()){*/
            return $this->redirect(['index']);
        /*}else{
            return false;
        }*/
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
