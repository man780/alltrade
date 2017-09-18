<?php

namespace frontend\controllers;


use \frontend\themes\alltrade\assets\AppAssets;
use \backend\models\Companies;
use \backend\models\Category;
use backend\models\Goods;

use Yii;
use frontend\models\GoodsSearch;
use frontend\models\RatingCompanies;
use frontend\models\Reviews;
use frontend\models\Subscribe;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use yii\helpers\Url;

class EshopController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $this->layout = 'onlineshop';
        $categories = Category::getCategoryList();
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        $goodsHits = Goods::getGoodsHit();
        $companiesForeign = Companies::getCompanies(false);
        $companiesLocal = Companies::getCompanies();
        $query = "SELECT g.`id`, `id_company`, g.`old_cost`, g.`cost`, g.`id_currency`, c.`name` cname, g.`name` name, g.`image` image, max(`discount`) 
            FROM `at_goods` g, `at_companies` c
            WHERE c.`id` = g.`id_company` AND `discount` !=0 AND g.`status`=1 GROUP BY `id_company`, g.`name`, g.`id` ORDER BY max(`discount`) DESC";
        $connection = \Yii::$app->getDb();
        $command = $connection->createCommand($query);
        $discountGoods = $command->queryAll();
        $id_comp = [];
        foreach ($discountGoods as $key => $discountGood) {
            $id_comp[$key] = $discountGood['id_company'];
        }
        $id_comp = array_unique($id_comp);
        $i = 0;
        foreach ($id_comp as $key => $id_com) {
            $discountGoodsNew[$i] = $discountGoods[$key];
            $i++;
        }
        //vd($discountGoodsNew);
        return $this->render('index', [
            'layoutPath' => $layoutPath,
            'categories' => $categories,
            'goodsHits' => $goodsHits,
            'discountGoods' => $discountGoodsNew,
            'companiesForeign' => $companiesForeign,
            'companiesLocal' => $companiesLocal,
        ]);
    }

    public function actionShop($id){

        $company = Companies::getCompany($id);
        $categories = Category::getCategoryListByCompanyId($id);
        $goods = Goods::getGoodsByCompany($id);
        $goodsNew = Goods::getGoodsNew($id);
        $goodsHits = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['orders' => null]])->orderBy('orders DESC')->limit(10)->asArray()->all();
        $goodsPromotion = Goods::getPromotion($id);
        $goodsDiscount = Goods::getDiscount($id);
        //vd($goodsDiscount);
        //vd($company);
        switch($company->id_shablon){
            case 1: $this->layout = 'eshop1'; $view = 'shop1'; break;
            case 2: $this->layout = 'eshop2'; $view = 'shop2'; break;
            case 3: $this->layout = 'eshop3'; $view = 'shop3'; break;
            default: $this->layout = 'eshop'; $view = 'shop1';
        }

        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render($view, [
            'layoutPath' => $layoutPath,
            'company' => $company,
            'categories' => $categories,
            'goods' => $goods,
            'goodsNew' => $goodsNew,
            'goodsHits' => $goodsHits,
            'goodsPromotion' => $goodsPromotion,
            'goodsDiscount' => $goodsDiscount,
            'id' => $id
        ]);
    }

    public function actionLargediscount($id = null){

        $categories = Category::getCategoriesSubsidiary($id, 2);
        //vd($categories, false);
        if ($id == null) {
            $goods = Goods::find()->where(['status' => 1])->andWhere(['not', ['discount' => null]])->orderBy('discount DESC');
        }
        else {
            $category = $categories[0];
            $goods = Goods::find()->where(['status' => 1, 'id_category' => $category])->andWhere(['not', ['discount' => null]]);
            foreach ($categories as $key => $category) {
                $goods->orWhere(['status' => 1, 'id_category' => $category])->andWhere(['not', ['discount' => null]]);
            }
            $goods->orderBy('discount DESC');
        }

        $pagination = new Pagination([
            'defaultPageSize' => 12,
            'totalCount' => $goods->count()
        ]);

        $goods = $goods->offset($pagination->offset)->limit($pagination->limit)->all();
        
        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('largediscount', [
            'goods' => $goods,
            'id_goods' => $id,
            'pagination' => $pagination,
            'category' => $categories
        ]);
    }

    public function actionBrands(){

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('brands', [
            'layoutPath' => $layoutPath
        ]);
    }

    public function actionFavorite(){

        $id = \Yii::$app->user->id;

        if ($id) {
            $subscribes = Subscribe::find()->where(['id_user' => $id])->orderBy('date DESC')->all();
        }
        
        $this->layout = 'onlineshop';
        return $this->render('favorite', [
            'subscribes' => $subscribes
        ]);
    }

    public function actionFavoritedelete($id){

        $subscribe = Subscribe::find()->where(['id' => $id])->one();
        if ($subscribe->delete()) {
            return $this->redirect(['favorite']);
        }
    }

    public function actionCategory($id, $id_cat){

        $categories = Category::getCategoriesSubsidiary($id_cat, 2);
        $comp_cat = Companies::find()->where(['id' => $id])->asArray()->one();
        $cats = json_decode($comp_cat['cats'], true);
        foreach ($categories as $key => $category) {
            if (!in_array($category, $cats)) {
                unset($categories[$key]);
            }
        }

        $goods = Goods::find()->where(['id_company' => $id, 'id_category' => $categories])->orderBy('id DESC');
        
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $goods->count()
        ]);

        $goods = $goods->offset($pagination->offset)->limit($pagination->limit)->all();

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('category', [
            'company' => $comp_cat,
            'goods' => $goods,
            'layoutPath' => $layoutPath,
            'pagination' => $pagination,
            'id' => $id,
            'id_cat' => $id_cat
        ]);
    }

    public function actionCategorylist($id, $id_cat){

        $categories = Category::getCategoriesSubsidiary($id_cat, 2);
        $comp_cat = Companies::find()->where(['id' => $id])->asArray()->one();
        $cats = json_decode($comp_cat['cats'], true);
        foreach ($categories as $key => $category) {
            if (!in_array($category, $cats)) {
                unset($categories[$key]);
            }
        }

        $goods = Goods::find()->where(['id_company' => $id, 'id_category' => $categories])->orderBy('id DESC');
        
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $goods->count()
        ]);

        $goods = $goods->offset($pagination->offset)->limit($pagination->limit)->all();

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('categorylist', [
            'company' => $comp_cat,
            'goods' => $goods,
            'layoutPath' => $layoutPath,
            'pagination' => $pagination,
            'id' => $id,
            'id_cat' => $id_cat
        ]);
    }

    public function actionDiscount($id, $filterCost = null, $filterOrder = null){

        if ($filterOrder == 'bottom') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('orders');
        }
        elseif ($filterOrder == 'top') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('orders DESC');
        }
        elseif ($filterCost == 'bottom') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('cost');
        }
        elseif ($filterCost == 'top') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('cost DESC');
        }
        else {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('discount DESC');
        }

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $goods->count()
        ]);

        $goods = $goods->offset($pagination->offset)->limit($pagination->limit)->all();

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('discount', [
            'layoutPath' => $layoutPath,
            'id' => $id,
            'goods' => $goods,
            'pagination' => $pagination,
            'filterCost' => $filterCost,
            'filterOrder' => $filterOrder
        ]);
    }

    public function actionDiscountlist($id, $filterCost = null, $filterOrder = null){

        if ($filterOrder == 'bottom') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('orders');
        }
        elseif ($filterOrder == 'top') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('orders DESC');
        }
        elseif ($filterCost == 'bottom') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('cost');
        }
        elseif ($filterCost == 'top') {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('cost DESC');
        }
        else {
            $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['discount' => null]])->orderBy('discount DESC');
        }

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $goods->count()
        ]);

        $goods = $goods->offset($pagination->offset)->limit($pagination->limit)->all();

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('discountlist', [
            'layoutPath' => $layoutPath,
            'id' => $id,
            'goods' => $goods,
            'pagination' => $pagination,
            'filterCost' => $filterCost,
            'filterOrder' => $filterOrder
        ]);
    }

    public function actionLeader($id){

        $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['orders' => null]])->orderBy('orders DESC')->limit(10)->all();

        $this->layout = 'onlineshoppage';

        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('leader', [
            'goods' => $goods,
            'layoutPath' => $layoutPath,
            'id' => $id
        ]);
    }

    public function actionLeaderlist($id){

        $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->andWhere(['not', ['orders' => null]])->orderBy('orders DESC')->limit(10)->all();

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('leaderlist', [
            'goods' => $goods,
            'layoutPath' => $layoutPath,
            'id' => $id
        ]);
    }

    public function actionNovelty($id){

        $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->orderBy('id DESC')->limit(10)->all();

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('novelty', [
            'goods' => $goods,
            'layoutPath' => $layoutPath,
            'id' => $id
        ]);
    }

    public function actionNoveltylist($id){

        $goods = Goods::find()->where(['status' => 1, 'id_company' => $id])->orderBy('id DESC')->limit(10)->all();

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('noveltylist', [
            'goods' => $goods,
            'layoutPath' => $layoutPath,
            'id' => $id
        ]);
    }

    public function actionReviews($id){

        $model = new Reviews();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_shop = $id;
            $model->id_user = \Yii::$app->user->id;
            $model->date = time();
            if($model->save()){
                return $this->redirect(['reviews', 'id' => $id]);
            }
            else {
                header('Content-Type: text/html; charset=utf-8');
                vd($model->errors);
            }
        } else {
            $reviews = Reviews::find()->where(['id_shop' => $id])->orderBy('date DESC')->all();
            $this->layout = 'onlineshoppage';
            $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
            return $this->render('reviews', [
                'layoutPath' => $layoutPath,
                'id' => $id,
                'model' => $model,
                'reviews' => $reviews
            ]);
        }        
    }

    public function actionAbout($id){

        $company = Companies::getCompany($id);

        $this->layout = 'onlineshoppage';
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('about', [
            'layoutPath' => $layoutPath,
            'company' => $company,
            'id' => $id
        ]);
    }

    public function actionContact($id){

        $this->layout = 'onlineshoppage';
        $company = Companies::getCompany($id);
        $layoutPath = \Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('contact', [
            'layoutPath' => $layoutPath,
            'company' => $company,
            'id' => $id
        ]);
    }

    public function actionHitsindex($id){

        $categories = Category::getCategoriesSubsidiary($id, 2);
        $goods = Goods::getGoodsHitIndex($categories);
        $goods = $goods->limit(10)->all();
        //vd($goods);
        if ($goods) {
            foreach ($goods as $key => $good) {
                $imageArr = json_decode($good['image'], true);
                echo "<a href=".Url::toRoute(['/goods/view', 'id' => $good['id']])." class='a'>";
                    echo "<li class='tovarhits11'>";
                        echo '<p class="tovar-p"><img class="qualityMarkimg" src="/images/goods/'.$good['id'].'/'.$imageArr['min'].'"></p>';
                        echo '<div style="padding-left: 10px; padding-right: 10px;">';
                            echo '<p style="font-size: 120%">'.$good['name'].'</p>';
                            echo '<p style="font-size: 120%">';
                                echo $good['cost'].'&nbsp;';
                                if ($good['id_currency'] == 1) {
                                    echo "сум";
                                }else {
                                    echo "у.е.";
                                }
                            echo '</p></div></li></a>';
            }
        }
        else {
            echo "";
        }
    }

    public function actionHitsall(){

        $goods = Goods::getGoodsHitIndex($categories);
        
        $pagination = new Pagination([
            'defaultPageSize' => 12,
            'totalCount' => $goods->count()
        ]);
        $goods = $goods->offset($pagination->offset)->limit($pagination->limit)->all();
        $this->layout = 'onlineshoppage';
        return $this->render('hitsall', [
            'goods' => $goods,
            'pagination' => $pagination,
        ]);
    }

    

    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionRating($id, $id_user, $rating)
    {
        if($rating > 5 || $rating < 0){
            exit("Ошибка");
        }

        $model = RatingCompanies::find()->where(['id_user' => $id_user, 'id_company' => $id])->one();

        if (!$model) {
            $model = new RatingCompanies;
        }

        $model->id_company = $id;
        $model->id_user = $id_user;
        $model->star = $rating;

        if ($model->save()) {
            return 'ok';
        }
        else {
            return 'Ошибка';
        }
    }

    public function actionSubscribeadd($id_user, $id_shop)
    {
        $subscribe = new Subscribe();
        $subscribe->id_user = $id_user;
        $subscribe->id_shop = $id_shop;
        $subscribe->date = time();
        if($subscribe->save()){
            $subscribeID = $subscribe->id;
            return $subscribeID;
        }else{
            return false;
        }
    }

    public function actionSubscribedelete($id_user, $id_delete)
    {
        $desired = Subscribe::find()->where(['id' => $id_delete])->one();
        if($desired->delete()){
            return "ok";
        }else{
            return false;
        }
    }
}
