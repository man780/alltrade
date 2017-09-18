<?php

namespace backend\models;

use Yii;

use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "at_category".
 *
 * @property integer $id
 * @property integer $id_parent
 * @property string $name
 * @property string $decription
 * @property string $text
 * @property string $image
 * @property integer $status
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 */
class Category extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLE = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_parent', 'name', 'decription', 'text', 'status'], 'required'],
            [['id_parent', 'status'], 'integer'],
            [['text'], 'string'],
            [['name', 'decription'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_parent' => Yii::t('app', 'Id Parent'),
            'id_menu' => Yii::t('app', 'Id Menu'),
            'name' => Yii::t('app', 'Name'),
            'decription' => Yii::t('app', 'Decription'),
            'text' => Yii::t('app', 'Text'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
            'dcreated' => Yii::t('app', 'Dcreated'),
            'bycreated' => Yii::t('app', 'Bycreated'),
            'dmodified' => Yii::t('app', 'Dmodified'),
            'bymodified' => Yii::t('app', 'Bymodified'),
            'ddeleted' => Yii::t('app', 'Ddeleted'),
            'bydeleted' => Yii::t('app', 'Bydeleted'),
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($insert){
                $this->dcreated = time();
                $this->bycreated =  Yii::$app->user->getId();
            }else{
                $this->dmodified = time();
                $this->bymodified =  Yii::$app->user->getId();
            }
            return true;
        } else {

            return false;
        }
    }


    /**
     * Возвращает опубликованные посты
     * @return ActiveDataProvider
     */

    public static function getCategoriesSubsidiary($id_cat = 1, $id_menu = 1)
    {
        $categories = self::find()->select(['id'])->where(['status' => self::STATUS_ACTIVE, 'id_menu' => $id_menu, 'id' => $id_cat])->asArray()->all();
        $id_parent = $categories['0']['id'];
        $categories1 = self::find()->select(['id'])->where(['status' => self::STATUS_ACTIVE, 'id_menu' => $id_menu, 'id_parent' => $id_parent])->asArray()->all();
        $count = 0;
        foreach ($categories1 as $key => $category) {
            $id_parent = $category['id'];
            
            $category1 = self::find()->select(['id', 'name'])->where(['status' => self::STATUS_ACTIVE, 'id_menu' => $id_menu, 'id_parent' => $id_parent])->asArray()->all();

            foreach ($category1 as $key1 => $categor1) {
                $id_parent = $categor1['id'];
                $categories2[$count] = $categor1['id'];
                $count++;
                $categories3 = self::find()->select(['id', 'name', 'id_parent'])->where(['status' => 1, 'id_menu' => $id_menu, 'id_parent' => $id_parent])->asArray()->all();
                foreach ($categories3 as $key55 => $categor3) {
                    $categories4[$count] = $categor3['id'];
                    $count++;
                }
            }
        }
        foreach ($categories1 as $key2 => $categor1) {
            $categories2[$count] = $categor1['id'];
            $count++;
        }
        if ($categories4) {
            foreach ($categories4 as $key2 => $categor1) {
                $categories2[$count] = $categor1;
                $count++;
            }
        }
        $categories2[$count] = $id_cat;
        $count++;
        return $categories2;
    }

    public static function getCategories4F($id_menu)
    {
        $categories = self::find()->select(['id', 'id_parent', 'name'])->where(['status' => self::STATUS_ACTIVE, 'id_menu' => $id_menu])->asArray()->all();
        foreach($categories as $k => $category){
            if($category['id_parent'] == 0){
                $parentCat[$category['id']] = ['id' => $category['id'], 'name' => $category['name']];
                unset($categories[$k]);
            }
        }
        foreach($parentCat as $key => $cat){
            foreach($categories as $i => $category){
                if($key == $category['id_parent'] ){
                    $bottomCat[$key][] = ['id' => $category['id'], 'name' => $category['name']];
                    unset($categories[$i]);
                }else if($category['id_parent'] == $cat['id']){
                    $bottomCat2[$i][] = ['id' => $category['id'], 'name' => $category['name']];
                }
            }
        }
        return ['categories' => $categories, 'parentCat' => $parentCat, 'bottomCat' => $bottomCat, 'bottomCat2' => $bottomCat2];
    }

    public static function getCategoriesEshop($id_menu) {

        $parentCat[]['id'] = $id_menu;

        $categories = self::find()->select(['id', 'id_parent'])->where(['status' => 1, 'id_menu' => 2])->asArray()->all();

        foreach($categories as $k => $category){
            if($category['id_parent'] == $id_menu){
                $cat1[$category['id']] = ['id' => $category['id'], 'id_parent' => $category['id_parent']];
            }
        }

        if (!is_null($cat1)) {
            foreach($cat1 as $key => $cat){
                foreach($categories as $i => $category){
                    if($key == $category['id_parent'] ){
                        $cat2[$category['id']] = ['id' => $category['id'], 'id_parent' => $category['id_parent']];
                    }
                }
            }
        }
        if (!is_null($cat2)) {
            foreach($cat2 as $key1 => $cate){
                foreach($categories as $j => $category){
                    if($cate['id'] == $category['id_parent'] ){
                        $cat3[$category['id']] = ['id' => $category['id'], 'id_parent' => $category['id_parent']];
                    }
                }
            }
        }

        return ['parentCat' => $parentCat, 'cat1' => $cat1, 'cat2' => $cat2, 'cat3' => $cat3];
    }

    /**
     * Возвращает опубликованные посты
     * @return ActiveDataProvider
     */
    public static function getCategoryList()
    {
        $categories = self::find()->where(['status' => self::STATUS_ACTIVE])->all();
        return ArrayHelper::map($categories, 'id', 'name');
    }

    public static function getCategoryListByCompany()
    {
        $compCatsModel = Companies::getCompanyCats();
        $compCats = json_decode($compCatsModel->cats);
        $categories = self::find()->where(['status' => self::STATUS_ACTIVE, 'id' => $compCats])->asArray()->all();
        return $categories;
    }

    public static function getCategoryListByCompanyId($id)
    {
        $compCatsModel = Companies::getCompanyCatsById($id);
        $compCats = json_decode($compCatsModel->cats);
        //vd($compCats);
        $categories = self::find()->where(['status' => self::STATUS_ACTIVE, 'id' => $compCats])->asArray()->all();
        return $categories;

    }

    public function getParent()
    {
        return $this->hasOne(self::className(), ['id' => 'id_parent']);
    }

    public function getParentName()
    {
        $parent = $this->parent;
        return $parent ? $parent->name : '';
    }


    public static function getParentsList()
    {
        // Выбираем только те категории, у которых есть дочерние категории
        $parents = self::find()
            ->select(['c.id', 'c.name'])
            ->join('JOIN', 'at_category c', 'at_category.id_parent = c.id')
            ->distinct(true)
            ->all();

        return ArrayHelper::map($parents, 'id', 'name');
    }


    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'id_menu']);
    }

    public function getMenuName()
    {
        $menu = $this->menu;
     
        return $menu ? $menu->name : '';
    }

    static public function getChildCategories($id_category){

        $categories = self::find()->select(['id', 'id_parent', 'name'])->where(['id_parent' => $id_category])->asArray()->all();

        return $categories;
    }

    static public function getCats(){
        $categories = self::find()->select(['id', 'id_parent', 'name'])->all();

        return $categories;
    }

    /*static public function getChildCategories($id_category){

        $categories = self::find()->select(['name'])->where(['id' => $id_category])->asArray()->all();

        return $categories;
    }*/
}
