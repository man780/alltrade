<?php

namespace frontend\controllers;

use Yii;
use backend\models\Goods;
use frontend\models\GoodsSearch;
use backend\models\Category;
use backend\models\Brands;
use backend\models\States;
use backend\models\Companies;
use backend\models\Currency;
use backend\models\Countries;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use backend\models\GoodsFields;
use backend\models\GoodsFieldsValues;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
/**
 * GoodsController implements the CRUD actions for Goods model.
 */
class GoodsController extends Controller
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
     * Lists all Goods models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Goods model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout = 'good';
        $good = $this->findModel($id);

        //vd($good);

        $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        $goodsHits = Goods::getGoodsHit($good->id_company);
        $company = Companies::getCompany($good->id_company);
        $categories = Category::getCategoryListByCompanyId($good->id_company);

        $goodsFields = GoodsFields::getFieldsByCat($good->id_category);
        $goodsFieldsValues = GoodsFieldsValues::getFieldsValuesGood($id);

        //vd($goodsFieldsValues);

        return $this->render('view', [
            'layoutPath' => $layoutPath,
            'good' => $good,
            'company' => $company,
            'categories' => $categories,
            'goodsHits' => $goodsHits,
            'goodsFields' => $goodsFields,
            'goodsFieldsValues' => $goodsFieldsValues,
        ]);
    }

    /**
     * Creates a new Goods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Goods();
        $categories = Category::getCategoryList();
        $brands = Brands::getList();
        $states = States::getList();
        $companies = Companies::getList();
        $countries = Countries::getList();
        $currencies = Currency::getList();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
            return $this->render('create', [
                'layoutPath'=>$layoutPath,
                'categories' => $categories,
                'brands' => $brands,
                'states' => $states,
                'companies' => $companies,
                'countries' => $countries,
                'currencies' => $currencies,
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Goods model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $categories = Category::getCategoryList();
        $brands = Brands::getList();
        $states = States::getList();
        $companies = Companies::getList();
        $countries = Countries::getList();
        $currencies = Currency::getList();
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();
            vd($post);
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                vd($model->errors);
            }
        } else {
            $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
            return $this->render('update', [
                'layoutPath'=>$layoutPath,
                'categories' => $categories,
                'brands' => $brands,
                'states' => $states,
                'companies' => $companies,
                'countries' => $countries,
                'currencies' => $currencies,
                'model' => $model,
            ]);
        }
    }

    public function actionAdditional($id_category, $id_ad)
    {
        $goodsFields = GoodsFields::getFieldsByCat($id_category);
        $result = '';
        foreach($goodsFields as $goodsField){
            $value = '';
            if(isset($id_ad)){
                $goodsFieldsValue = GoodsFieldsValues::find()->where(['id_good' => $id_ad, 'id_goods_field' => $goodsField->id])->one();
                $value = $goodsFieldsValue->value;
            }
            $result .= '<div class="form-group">';
            if($goodsField->type == 'text'){
                $result .= Html::label($goodsField->name, 'GoodsField['.$goodsField->id.']', ['class' => 'control-label '.$goodsField->nameEn]);
                $result .= Html::textInput('GoodsField['.$goodsField->id.']', $value, ['class' => $goodsField->nameEn]);
            }elseif($goodsField->type == 'radio'){
                $result .= Html::label($goodsField->name, $goodsField->nameEn, ['class' => 'control-label '.$goodsField->nameEn]);
                $items = explode(',', $goodsField->option);
                $items = array_map('trim', $items);
                $result .= '<div style="display: inline-block;">';
                foreach($items as $item){
                    if($value == $item){
                        $result .= Html::radio('GoodsField['.$goodsField->id.']', true, ['value'=>$item, 'id'=>$item]);
                    }else{
                        $result .= Html::radio('GoodsField['.$goodsField->id.']', false, ['value'=>$item, 'id'=>$item]);
                    }
                    $result .= Html::label($item, $item, ['class' => 'control-label '.$goodsField->nameEn.'-'.$goodsField->id]);
                    $result .= '<br>';
                }
                $result .= '</div>';
            }elseif($goodsField->type == 'select'){
                //vd($value, false);
                $result .= Html::label($goodsField->name, 'GoodsField['.$goodsField->id.']', ['class' => 'control-label '.$goodsField->nameEn]);
                if($goodsField->option == 'Brands'){
                    $options = ArrayHelper::map(Brands::find()->where(['id_category' => $id_category])->all(), 'name', 'name');
                }elseif($goodsField->option == '1900:Y'){
                    $options = range(date('Y'), 1900);
                    $options = array_combine($options, $options);
                }else{
                    $options = explode(',', $goodsField->option);
                    $options = array_map('trim', $options);
                    $options = array_combine($options, $options);
                    //vd($options);
                }
                $result .= Html::dropDownList('GoodsField['.$goodsField->id.']', $value, $options);
            }elseif($goodsField->type == 'checkbox'){
                $result .= Html::label($goodsField->name, $goodsField->nameEn, ['class' => 'control-label '.$goodsField->nameEn]);
                $items = explode(',', $goodsField->option);
                $items = array_map('trim', $items);
                $result .= '<div style="display: inline-block;">';
                foreach($items as $key => $item){
                    //vd($value);
                    $values = explode(',', $value);
                    if(in_array($item, $values)){
                        //$result .= Html::radio('GoodsField['.$goodsField->id.']', true, ['value'=>$item, 'id'=>$item]);
                        $result .= Html::checkbox('GoodsField['.$goodsField->id.']['.$key.']', true, ['value'=>$item, 'id'=>$item]);
                    }else{
                        $result .= Html::checkbox('GoodsField['.$goodsField->id.']['.$key.']', false, ['value'=>$item, 'id'=>$item]);
                        //$result .= Html::radio('GoodsField['.$goodsField->id.']', false, ['value'=>$item, 'id'=>$item]);
                    }
                    $result .= Html::label($item, $item, ['class' => 'control-label '.$goodsField->nameEn.'-'.$goodsField->id]);
                    $result .= '<br>';
                }
                $result .= '</div>';
            }
            $result .= '</div>';
        }
        return $result;
    }
    /**
     * Deletes an existing Goods model.
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
     * Finds the Goods model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Goods the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Goods::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
