<?php

namespace backend\controllers;

use Yii;
use backend\models\Goods;
use backend\models\GoodsSearch;
use backend\models\Category;
use backend\models\Brands;
use backend\models\States;
use backend\models\Companies;
use backend\models\CurrencyEshop;
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
        $model = $this->findModel($id);
        $company = Companies::getCompanyByUser();
        if($model->id_company != $company->id){
            return $this->redirect(['index']);
        }else{
            return $this->render('view', [
                'model' => $model
            ]);
        }

    }

    /**
     * Creates a new Goods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Goods();
        $categories = Category::getCategoryListByCompany();
        //vd($categories);
        $brands = Brands::getList();
        $states = States::getList();
        $countries = Countries::getList();
        $currencies = CurrencyEshop::getList();
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();
            //vd($post);
            $imageObj = $_FILES['image'];
            $company = Companies::getCompanyByUser();
            $model->id_company = $company->id;

            $lastId = Goods::find()->count()+1;
            if(is_file($imageObj['tmp_name'])){
                Yii::setAlias('@fwi', '@frontend/web/images');
                $ext = pathinfo($imageObj['name'], PATHINFO_EXTENSION);
                if(!is_dir(Yii::getAlias('@fwi').'/goods/'.$lastId)){
                    mkdir(Yii::getAlias('@fwi').'/goods/'.$lastId, 0777);
                }
                $imageSizeArr = getimagesize($imageObj['tmp_name']);
                $minK = 250;
                $maxK = 1000;
                Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$lastId.'/img_'.$minK.'x'.$minK.'.'.$ext,
                                    $imageObj['tmp_name'],
                                    $minK, 75, $imageSizeArr[2]);

                Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$lastId.'/img_'.$maxK.'x'.$maxK.'.'.$ext,
                                    $imageObj['tmp_name'],
                                    $maxK, 75, $imageSizeArr[2]);

                $model->image = json_encode(['max' => 'img_'.$maxK.'x'.$maxK.'.'.$ext, 'min' => 'img_'.$minK.'x'.$minK.'.'.$ext]);
            }
            $galleryFlag = false;
            $k=0;
            $galleryArr = [];
            for($i=0; $i<6; $i++){
                if(is_file($_FILES['GoodsImages']['tmp_name'][$i])){
                    $galleryFlag = true;
                    $ext = pathinfo($_FILES['GoodsImages']['name'][$i], PATHINFO_EXTENSION);
                    Yii::setAlias('@fwi', '@frontend/web/images');
                    if(!is_dir(Yii::getAlias('@fwi').'/goods/'.$lastId.'/gallery')){
                        mkdir(Yii::getAlias('@fwi').'/goods/'.$lastId.'/gallery', 0777);
                    }
                    $imageSizeArr = getimagesize($_FILES['GoodsImages']['tmp_name'][$i]);
                    $minK = 250;
                    $maxK = 1000;
                    $minName = 'img_'.$k.'_'.$minK.'x'.$minK.'.'.$ext;
                    $maxName = 'img_'.$k.'_'.$maxK.'x'.$maxK.'.'.$ext;
                    Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$lastId.'/gallery/'.$minName,
                                            $_FILES['GoodsImages']['tmp_name'][$i],
                                            $minK, 75, $imageSizeArr[2]);
                    Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$lastId.'/gallery/'.$maxName,
                                            $_FILES['GoodsImages']['tmp_name'][$i],
                                            $maxK, 75, $imageSizeArr[2]);
                    $galleryArr[$k]['max'] = $maxName;
                    $galleryArr[$k]['min'] = $minName;
                    $k++;
                }
            }
            if($galleryFlag){
                $model->gallery = json_encode($galleryArr);
            }
            $model->delivery = $post['Goods']['delivery'];
            if($model->delivery == 1){
                $model->delivery_vil = json_encode($post['Goods']['delivery_vil']);
            }

            $model->type_sale = json_encode($post['Goods']['type_sale']);

            if($post['Goods']['type_count_sale'] == 1){
                $model->type_count_sale = json_encode($post['Type_count_sale']);
            }else{
                $model->type_count_sale = null;
            }


            if($model->save()){
                if(!is_null($post['GoodsField'])) {
                    foreach ($post['GoodsField'] as $key => $goodsField) {
                        if(is_array($goodsField)){
                            $goodsField = join(',', $goodsField);
                        }
                        if(trim($goodsField) == '')continue;
                        $goodsFieldsValues = new GoodsFieldsValues();
                        $goodsFieldsValues->id_goods_field = $key;
                        $goodsFieldsValues->id_good = $model->id;
                        $goodsFieldsValues->value = $goodsField;
                        if(!$goodsFieldsValues->save()){
                            vd($goodsFieldsValues->errors);
                        }
                    }
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                vd($model->errors);
            }

        } else {
            $delivery_vilArr = json_decode($model->delivery_vil, true);
            return $this->render('create', [
                'categories' => $categories,
                'brands' => $brands,
                'states' => $states,
                'countries' => $countries,
                'currencies' => $currencies,
                'model' => $model,
                'delivery_vilArr' => $delivery_vilArr,
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
        $company = Companies::getCompanyByUser();
        if($model->id_company != $company->id){
            return $this->redirect(['index']);
        }
        $categories = Category::getCategoryListByCompany();
        $brands = Brands::getList();
        $states = States::getList();
        $countries = Countries::getList();
        $currencies = CurrencyEshop::getList();
        if ($model->load(Yii::$app->request->post())) {

            $post = Yii::$app->request->post();
            if(!is_null($post['GoodsField'])){
                foreach ($post['GoodsField'] as $key => $goodsField) {
                    if(is_array($goodsField)){
                        $goodsField = join(',', $goodsField);
                    }
                    //vd($goodsField, false);
                    if(/*!is_array($goodsField) AND */trim($goodsField) == '')continue;
                    $goodsFieldsValue = GoodsFieldsValues::find()->where(['id_goods_field' => $key, 'id_good' => $id])->one();
                    //vd($goodsField, false);
                    if($goodsFieldsValue){
                        $goodsFieldsValue->value = $goodsField;
                        if(!$goodsFieldsValue->save()){
                            vd($goodsFieldsValue->errors);
                        }
                    }else{
                        $goodsFieldsValues = new GoodsFieldsValues();
                        $goodsFieldsValues->id_goods_field = $key;
                        $goodsFieldsValues->id_good = $id;
                        $goodsFieldsValues->value = $goodsField;
                        if(!$goodsFieldsValues->save()){
                            vd($goodsFieldsValues->errors);
                        }
                    }
                }
            }

            $imageObj = $_FILES['image'];
            if(is_file($imageObj['tmp_name'])){
                Yii::setAlias('@fwi', '@frontend/web/images');
                $ext = pathinfo($imageObj['name'], PATHINFO_EXTENSION);
                if(!is_dir(Yii::getAlias('@fwi').'/goods/'.$id)){
                    mkdir(Yii::getAlias('@fwi').'/goods/'.$id, 0777);
                }

                $imageSizeArr = getimagesize($imageObj['tmp_name']);
                $minK = 250;
                $maxK = 1000;
                Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$id.'/img_'.$minK.'x'.$minK.'.'.$ext,
                    $imageObj['tmp_name'],
                    $minK, 75, $imageSizeArr[2]);
                Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$id.'/img_'.$maxK.'x'.$maxK.'.'.$ext,
                    $imageObj['tmp_name'],
                    $maxK, 75, $imageSizeArr[2]);
                $model->image = json_encode(['max' => 'img_'.$maxK.'x'.$maxK.'.'.$ext, 'min' => 'img_'.$minK.'x'.$minK.'.'.$ext]);

            }
            $galleryFlag = false;
            $galleryArr = json_decode($model->gallery, true);
            $k = count($galleryArr);
            for($i=$k; $i<6; $i++){
                if(is_file($_FILES['GoodsImages']['tmp_name'][$i])){
                    $galleryFlag = true;
                    $ext = pathinfo($_FILES['GoodsImages']['name'][$i], PATHINFO_EXTENSION);
                    Yii::setAlias('@fwi', '@frontend/web/images');
                    if(!is_dir(Yii::getAlias('@fwi').'/goods/'.$id.'/gallery')){
                        mkdir(Yii::getAlias('@fwi').'/goods/'.$id.'/gallery', 0777);
                    }
                    $imageSizeArr = getimagesize($_FILES['GoodsImages']['tmp_name'][$i]);
                    $minK = 250;
                    $maxK = 1000;
                    $minName = 'img_'.$k.'_'.$minK.'x'.$minK.'.'.$ext;
                    $maxName = 'img_'.$k.'_'.$maxK.'x'.$maxK.'.'.$ext;
                    Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$id.'/gallery/'.$minName,
                        $_FILES['GoodsImages']['tmp_name'][$i],
                        $minK, 75, $imageSizeArr[2]);
                    Goods::imageresize(Yii::getAlias('@fwi').'/goods/'.$id.'/gallery/'.$maxName,
                        $_FILES['GoodsImages']['tmp_name'][$i],
                        $maxK, 75, $imageSizeArr[2]);
                    $galleryArr[$k]['max'] = $maxName;
                    $galleryArr[$k]['min'] = $minName;
                    $k++;
                }
            }
            if($galleryFlag){
                $model->gallery = json_encode($galleryArr);
            }

            $model->delivery = $post['Goods']['delivery'];
            if($model->delivery == 1){
                $model->delivery_vil = json_encode($post['Goods']['delivery_vil']);
            }

            $model->type_sale = json_encode($post['Goods']['type_sale']);

            if($post['Goods']['type_count_sale'] == 1){
                $model->type_count_sale = json_encode($post['Type_count_sale']);
            }else{
                $model->type_count_sale = null;
            }

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                vd($model->errors);
            }
        } else {
            $imagesArr = json_decode($model->gallery, true);
            $delivery_vilArr = json_decode($model->delivery_vil, true);
            $model->type_sale = json_decode($model->type_sale, true);
            if(!is_null($model->type_count_sale));
            $model->type_count_sale = json_decode($model->type_count_sale, true);

            return $this->render('update', [
                'categories' => $categories,
                'brands' => $brands,
                'states' => $states,
                'countries' => $countries,
                'currencies' => $currencies,
                'model' => $model,
                'imagesArr' => $imagesArr,
                'delivery_vilArr' => $delivery_vilArr,
            ]);
        }
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
     * Displays a single Goods model.
     * @param integer $id
     * @return mixed
     */
    public function actionSlide($id)
    {
        $model = $this->findModel($id);
        //vd(Yii::$app->request->post());
        if(Yii::$app->request->post()){
            //vd($model->image);
            $post = Yii::$app->request->post();
            $imageArr = json_decode($model->image, true);
            $maxImage = $imageArr['max'];
            Yii::setAlias('@fwi', '@frontend/web/images');

            $destinationWidth  = 300;
            $destinationHeight = 150;

            // Data taken from plugin
            $w = $post['w'];
            $h = $post['h'];
            $x = $post['x'];
            $y = $post['y'];

            $src = Yii::getAlias('@fwi').'/goods/'.$model->id.'/'.$maxImage;

            $image = imagecreatefromjpeg($src);
            $new_image = imageCreateTrueColor($destinationWidth , $destinationHeight);
            imageAlphaBlending($new_image, false);
            imageSaveAlpha($new_image, true);
            imagecopyresampled($new_image, $image, 0, 0, $x, -$y, $destinationWidth, $destinationHeight, $w, $h);
            imagepng($new_image, Yii:: getAlias('@fwi').'/goods/'.$model->id.'/slide.png', 9);
            return $this->redirect(['index']);
        }

        return $this->render('slide', [
            'model' => $model,
        ]);
    }

    /*
     * Акция
     * */
    public function actionPromotion($id)
    {
        $model = $this->findModel($id);

        //vd(Yii::$app->request->post());
        if(Yii::$app->request->post()){
            $post = Yii::$app->request->post();
            //vd($post);
            $model->old_cost = $post['Goods']['old_cost'];
            $model->cost = $post['Goods']['cost'];
            $from_date = strtotime($post['from_date']);
            $to_date = strtotime($post['to_date']);
            $description = $post['description'];
            $is_promotion = json_encode([$from_date, $to_date, $description]);
            //vd($is_promotion);
            $model->discount = null;
            $model->is_promotion = $is_promotion;
            if($model->save()){
                return $this->redirect(['/goods/index']);
            }else{
                vd($model->errors);
            }
        }

        if(is_null($model->old_cost))
        $model->old_cost = $model->cost;

        return $this->render('promotion', [
            'model' => $model,
        ]);
    }

    /*
     * Хит
     * */
    public function actionBestsale($id)
    {
        $model = $this->findModel($id);

        //vd(Yii::$app->request->post());
        if(Yii::$app->request->post()){
            $model->is_bestsale = 1;
        }

        $model->old_cost = $model->cost;
        return $this->render('bestsale', [
            'model' => $model,
        ]);
    }

    public function actionDiscount($id)
    {
        $model = $this->findModel($id);

        //vd(Yii::$app->request->post());
        if(Yii::$app->request->post()){
            $post = Yii::$app->request->post();
            //vd($post);
            $model->old_cost = $model->cost;
            $model->discount = $post['Goods']['discount'];
            $model->cost = $post['Goods']['cost'];

            $from_date = strtotime($post['from_date']);
            $to_date = strtotime($post['to_date']);
            $is_discount = json_encode([$from_date, $to_date]);
            //vd($is_promotion);
            $model->is_promotion = null;
            $model->is_discount = $is_discount;
//vd($model);
            if($model->save()){
                return $this->redirect(['/goods/index']);
            }else{
                vd($model->errors);
            }
        }

        if(is_null($model->old_cost))
        $model->old_cost = $model->cost;
        return $this->render('discount', [
            'model' => $model,
        ]);
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
