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
 * AdsController implements the CRUD actions for Ads model.
 */
class AdsController extends Controller
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
     * Lists all Ads models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ads model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout = 'productall';
        $model = $this->findModel($id);
        $model->view = $model->view+1;
        $model->save();
        $goodsFields = GoodsFields::getFieldsByCat($model->id_category);
        $goodsFieldsValues = GoodsFieldsValues::getFieldsValues($id);
        return $this->render('viewall', [
            'model' => $model,
            'goodsFields' => $goodsFields,
            'goodsFieldsValues' => $goodsFieldsValues,
        ]);
    }

    /**
     * Creates a new Ads model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ads();
        $categories = Category::getCategoryList();
        $brands = Brands::getList();
        $states = States::getList();
        $companies = Companies::getList();
        $countries = Countries::getList();
        $currencies = Currency::getList();

        $viloyats = Viloyat::getList();
        $tumans= Tuman::getList();

//vd(Yii::$app->request->post());

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();

            if (is_array($post['Ads']['phone'])) {
                $model->contact_phone = json_encode($post['Ads']['phone']);
            }
            else {
                $model->contact_phone = null;
            }
            
            $lastId = Ads::find()->count()+1;
            $galleryFlag = false;
            $k=0;
            $galleryArr = [];
            for($i=0; $i<9; $i++){
                if(is_file($_FILES['AdsImages']['tmp_name'][$i])){
                    $galleryFlag = true;
                    $ext = pathinfo($_FILES['AdsImages']['name'][$i], PATHINFO_EXTENSION);
                    //Yii::setAlias('@fwi', '@frontend/web/images');

                    if(!is_dir(Yii::getAlias('@webroot/images').'/ads/'.$lastId)){
                        mkdir(Yii::getAlias('@webroot/images').'/ads/'.$lastId, 0777);
                    }
                    $imageSizeArr = getimagesize($_FILES['AdsImages']['tmp_name'][$i]);
                    $minK = 250;
                    $maxK = 750;
                    $minName = 'img_'.$k.'_'.$minK.'x'.$minK.'.'.$ext;
                    $maxName = 'img_'.$k.'_'.$maxK.'x'.$maxK.'.'.$ext;
                    Ads::imageresize(Yii::getAlias('@webroot/images').'/ads/'.$lastId.'/'.$minName,
                        $_FILES['AdsImages']['tmp_name'][$i],
                        $minK, 75, $imageSizeArr[2]);
                    Ads::imageresize(Yii::getAlias('@webroot/images').'/ads/'.$lastId.'/'.$maxName,
                        $_FILES['AdsImages']['tmp_name'][$i],
                        $maxK, 75, $imageSizeArr[2]);
                    $galleryArr[$k]['max'] = $maxName;
                    $galleryArr[$k]['min'] = $minName;
                    $k++;
                }
            }
            //vd($galleryArr);
            if($galleryFlag){
                $model->image = json_encode($galleryArr);
            }
            $model->status = 1;
            if($model->save()){
                if(!is_null($post['GoodsField'])) {
                    foreach ($post['GoodsField'] as $key => $goodsField) {
                        if(is_array($goodsField)){
                            $goodsField = join(',', $goodsField);
                        }
                        if(trim($goodsField) == '')continue;
                        $goodsFieldsValues = new GoodsFieldsValues();
                        $goodsFieldsValues->id_goods_field = $key;
                        $goodsFieldsValues->id_ad = $model->id;
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
            $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
            return $this->render('create', [
                'layoutPath'=>$layoutPath,
                'categories' => $categories,
                'brands' => $brands,
                'states' => $states,
                'companies' => $companies,
                'countries' => $countries,
                'currencies' => $currencies,
                'viloyats' => $viloyats,
                'tumans' => $tumans,
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ads model.
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
        $viloyats = Viloyat::getList();
        $tumans= Tuman::getList();

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();

            if(is_array($post['Ads']['phone'])){
                $model->contact_phone = json_encode($post['Ads']['phone']);
            }

            if ($post['AdsImagesDelete']) {
                $adsDeleteImage = explode(',', $post['AdsImagesDelete']);
                //vd($adsDeleteImage, false);
                foreach ($adsDeleteImage as $key => $adsDeleteImg) {
                    if ($adsDeleteImg == '') {
                        unset($adsDeleteImage[$key]);
                    }
                }
                //vd($adsDeleteImage, false);
                $adsDeleteImage = array_unique($adsDeleteImage);
                //vd($adsDeleteImage, false);
            }

            if ($adsDeleteImage) {
                foreach ($adsDeleteImage as $key => $adsDeleteImg) {
                    if (isset($post['OldAdsImages'][$adsDeleteImg])) {
                        unset($post['OldAdsImages'][$adsDeleteImg]);
                    }
                }
            }


            //vd($post['OldAdsImages'], false);

            //vd($_FILES['AdsImages'], false);

            //vd($post['OldAdsImages'][6], false);


            $galleryFlag = false;
            $galleryArr = [];
            for($i=0; $i<9; $i++){
                if(is_file($_FILES['AdsImages']['tmp_name'][$i])){
                    $galleryFlag = true;
                    $ext = pathinfo($_FILES['AdsImages']['name'][$i], PATHINFO_EXTENSION);

                    if(!is_dir(Yii::getAlias('@webroot/images').'/ads/'.$id)){
                        mkdir(Yii::getAlias('@webroot/images').'/ads/'.$id, 0777);
                    }
                    $imageSizeArr = getimagesize($_FILES['AdsImages']['tmp_name'][$i]);
                    $minK = 250;
                    $maxK = 750;
                    $minName = 'img_'.$i.'_'.$minK.'x'.$minK.'.'.$ext;
                    $maxName = 'img_'.$i.'_'.$maxK.'x'.$maxK.'.'.$ext;
                    Ads::imageresize(Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$minName,
                        $_FILES['AdsImages']['tmp_name'][$i],
                        $minK, 75, $imageSizeArr[2]);
                    Ads::imageresize(Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$maxName,
                        $_FILES['AdsImages']['tmp_name'][$i],
                        $maxK, 75, $imageSizeArr[2]);
                    $galleryArr[$i]['max'] = $maxName;
                    $galleryArr[$i]['min'] = $minName;
                    //vd($galleryArr[$i]);
                }
                else {
                    if ($post['OldAdsImages'][$i]) {
                        $galleryFlag = true;
                        $imga = json_decode($post['OldAdsImages'][$i], true);
                        $galleryArr[$i]['max'] = $imga['max'];
                        $galleryArr[$i]['min'] = $imga['min'];
                    }
                }
            }

            //vd($galleryArr);
            $ii = 0;
            $galleryArrNew = [];
            //vd($galleryArr, false);
            foreach ($galleryArr as $key => $galleryA) {
                
                $ext = explode('.', $galleryA['min']);
                $ext = $ext[1];

                $minName = 'img_'.$ii.'_250x250.'.$ext;
                $maxName = 'img_'.$ii.'_750x750.'.$ext;

                copy(Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$galleryA['min'], Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$minName);
                copy(Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$galleryA['max'], Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$maxName);



                $galleryArrNew[$ii]['max'] = $maxName;
                $galleryArrNew[$ii]['min'] = $minName;
                $ii++;
                //vd($galleryA, false);
                //copy ( string $source , string $dest [, resource $context ] )
            }

            //vd($galleryArrNew);

            if($galleryFlag){
                $model->image = json_encode($galleryArrNew);
            }



            /*$imagesTypes = array(1,2,3,6);
            //vd($post['AdsImagesDelete']);
            if(is_array($post['AdsImagesDelete'])){
                $images = json_decode($model->image);
                foreach($post['AdsImagesDelete'] as $deleteImage){
                    $path = Yii::getAlias('@webroot/images').'/ads/'.$model['id'].'/'.$deleteImage.'.';
                    if(is_file($path)){
                        $key = array_search($deleteImage, $images);
                        //vd($key);
                        if($key !== false) {
                            unset($images[$key]);
                        }
                        unlink($path);
                    }
                }
                //vd($images);
                $model->image = json_encode($images);
            }


            $adsImages = $_FILES['AdsImages'];
            //vd($adsImages);
            $countImages = count($adsImages);
            if($countImages>0){
                $galleryFlag = false;
                $k=$countImages;
                $galleryArr = [];
                //vd($k);
                for($i=$countImages; $i<6; $i++){
                    if(is_file($_FILES['AdsImages']['tmp_name'][$i])){
                        $galleryFlag = true;
                        $ext = pathinfo($_FILES['AdsImages']['name'][$i], PATHINFO_EXTENSION);
                        //Yii::setAlias('@fwi', '@frontend/web/images');

                        if(!is_dir(Yii::getAlias('@webroot/images').'/ads/'.$id)){
                            mkdir(Yii::getAlias('@webroot/images').'/ads/'.$id, 0777);
                        }
                        $imageSizeArr = getimagesize($_FILES['AdsImages']['tmp_name'][$i]);
                        $minK = 250;
                        $maxK = 750;
                        $minName = 'img_'.$k.'_'.$minK.'x'.$minK.'.'.$ext;
                        $maxName = 'img_'.$k.'_'.$maxK.'x'.$maxK.'.'.$ext;
                        Ads::imageresize(Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$minName,
                            $_FILES['AdsImages']['tmp_name'][$i],
                            $minK, 75, $imageSizeArr[2]);
                        Ads::imageresize(Yii::getAlias('@webroot/images').'/ads/'.$id.'/'.$maxName,
                            $_FILES['AdsImages']['tmp_name'][$i],
                            $maxK, 75, $imageSizeArr[2]);
                        $galleryArr[$k]['max'] = $maxName;
                        $galleryArr[$k]['min'] = $minName;
                        $k++;
                    }
                }
                //vd($galleryArr);
                if($galleryFlag){
                    $model->image = json_encode($galleryArr);
                }

            }*/

            if(!is_null($post['GoodsField'])){
                foreach ($post['GoodsField'] as $key => $goodsField) {
                    if(is_array($goodsField)){
                        $goodsField = join(',', $goodsField);
                    }
                    //vd($goodsField, false);
                    if(trim($goodsField) == '')continue;
                    $goodsFieldsValue = GoodsFieldsValues::find()->where(['id_goods_field' => $key, 'id_ad' => $id])->one();
                    //vd($goodsField, false);
                    if($goodsFieldsValue){
                        $goodsFieldsValue->value = $goodsField;
                        if(!$goodsFieldsValue->save()){
                            vd($goodsFieldsValue->errors);
                        }
                    }else{
                        $goodsFieldsValues = new GoodsFieldsValues();
                        $goodsFieldsValues->id_goods_field = $key;
                        $goodsFieldsValues->id_ad = $id;
                        $goodsFieldsValues->value = $goodsField;
                        if(!$goodsFieldsValues->save()){
                            vd($goodsFieldsValues->errors);
                        }
                    }
                }
            }
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                vd($model->errors);
            }
            
        } else {
            $goodsFields = GoodsFields::getFieldsByCat($model->id_category);
            $layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
            //vd($model);
            /*$arr = explode(',', $model->contact_phone_attributes);
            $model->contact_phone_attributes = $arr;
            $model->contact_phone = explode('|||', $model->contact_phone);*/
            return $this->render('update', [
                'layoutPath'=>$layoutPath,
                'categories' => $categories,
                'brands' => $brands,
                'states' => $states,
                'companies' => $companies,
                'countries' => $countries,
                'currencies' => $currencies,
                'goodsFields' => $goodsFields,
                'viloyats' => $viloyats,
                'tumans' => $tumans,
                'model' => $model,
            ]);
        }
    }

    public function actionCost($id)
    {
        $model = $this->findModel($id);
        $model->status = 1;
        if($model->save()){
            return $this->redirect(Yii::$app->request->referrer);
        }else{
            vd($model->errors);
        }
    }

    private function removeDirectory($dir) {
        if ($objs = glob($dir."/*")) {
           foreach($objs as $obj) {
             is_dir($obj) ? removeDirectory($obj) : unlink($obj);
           }
        }
        rmdir($dir);
    }

    
    public function actionActivate($id)
    {
        $model = $this->findModel($id);
        $model->status = 1;
        if($model->save()){
            return $this->redirect(Yii::$app->request->referrer);
        }else{
            vd($model->errors);
        }        
    }

    public function actionDisable($id)
    {
        $model = $this->findModel($id);
        $model->status = 0;
        if($model->save()){
            return $this->redirect(Yii::$app->request->referrer);
        }else{
            vd($model->errors);
        }
    }

    /**
     * Deletes an existing Ads model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionAdditional($id_category, $id_ad)
    {
        $goodsFields = GoodsFields::getFieldsByCat($id_category);
        $result = '';
        foreach($goodsFields as $goodsField){
            $value = '';
            if(isset($id_ad)){
                $goodsFieldsValue = GoodsFieldsValues::find()->where(['id_ad' => $id_ad, 'id_goods_field' => $goodsField->id])->one();
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
                $result .= '<div style="display: inline-block; /*width: 200px;*/">';
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
                //vd($goodsField);
                //vd($value, false);
                $result .= Html::label($goodsField->name, 'GoodsField['.$goodsField->id.']', ['class' => 'control-label '.$goodsField->nameEn]);
                if($goodsField->option == 'Brands'){
                    $options = ArrayHelper::map(Brands::find()->where(['id_category' => $id_category])->all(), 'name', 'name');
                    //vd($options);
                }elseif($goodsField->option == '1900:Y'){
                    $options = range(date('Y'), 1900);
                    $options = array_combine($options, $options);
                }else{
                    $options = explode(',', $goodsField->option);
                    $options = array_map('trim', $options);
                    $options = array_combine($options, $options);
                    //vd($options);
                }
                //vd($value, false);
                $result .= Html::dropDownList('GoodsField['.$goodsField->id.']', $value, $options);
            }elseif($goodsField->type == 'checkbox'){
                $result .= Html::label($goodsField->name, $goodsField->nameEn, ['class' => 'control-label '.$goodsField->nameEn]);                
                $items = explode(',', $goodsField->option);
                $items = array_map('trim', $items);
                $result .= '<div style="display: inline-block; /*width: 200px;*/">';
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
     * Finds the Ads model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ads the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ads::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
