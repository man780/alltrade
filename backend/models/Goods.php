<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "at_goods".
 *
 * @property integer $id
 * @property integer $id_category
 * @property integer $id_brand
 * @property integer $id_company
 * @property integer $id_country
 * @property integer $id_currency
 * @property integer $id_states
 * @property string $name
 * @property string $description
 * @property string $text
 * @property integer $count
 * @property integer $count_all
 * @property double $old_cost
 * @property double $cost
 * @property string $color
 * @property string $size
 * @property integer $like
 * @property integer $dislike
 * @property integer $rate
 * @property integer $delivery
 * @property string $image
 * @property string $gallery
 * @property integer $status
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 */
class Goods extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLE = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'id_currency', 'name', 'text', /*'count_all', */'cost', /*'status', *//*'manufacturer'*/], 'required'],
            [['id_category', 'id_brand', 'id_company', 'id_country', 'id_currency', 'id_states', 'count', 'count_all', 'status'], 'integer'],
            [['text', 'gallery'], 'string'],
            [['old_cost', 'cost'], 'number'],
            [['name', 'description', 'color', 'size', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_category' => Yii::t('app', 'Id Category'),
            'id_brand' => Yii::t('app', 'Id Brand'),
            'id_company' => Yii::t('app', 'Id Company'),
            'id_country' => Yii::t('app', 'Id Country'),
            'id_currency' => Yii::t('app', 'Id Currency'),
            'id_states' => Yii::t('app', 'Id States'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'text' => Yii::t('app', 'Text'),
            'count' => Yii::t('app', 'Count'),
            'count_all' => Yii::t('app', 'Count All'),
            'old_cost' => Yii::t('app', 'Old Cost'),
            'cost' => Yii::t('app', 'Cost'),
            'color' => Yii::t('app', 'Color'),
            'size' => Yii::t('app', 'Size'),
            'like' => Yii::t('app', 'Like'),
            'dislike' => Yii::t('app', 'Dislike'),
            'rate' => Yii::t('app', 'Rate'),
            'delivery' => Yii::t('app', 'Delivery'),
            'image' => Yii::t('app', 'Image'),
            'gallery' => Yii::t('app', 'Gallery'),
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

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }

    public function getCategoryName() {
        return $this->category->name;
    }

    public static function getGoodsByCompany($id_company) {
        $goods = self::find()->where(['status' => self::STATUS_ACTIVE, 'id_company' => $id_company])->asArray()->all();
        return $goods;
    }

    public static function getGoodsNew($id_company) {
        $goods = self::find()->where(['status' => self::STATUS_ACTIVE, 'id_company' => $id_company])->limit(10)->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $goods;
    }

    public static function getGoodsHit($id_company = null) {
        if(is_null($id_company)){
            $goods = self::find()->where(['status' => self::STATUS_ACTIVE])->andWhere(['not', ['is_bestsale' => null]])->limit(10)->orderBy(['id' => SORT_DESC])->asArray()->all();
        }else{
            $goods = self::find()->where(['status' => self::STATUS_ACTIVE, 'id_company' => $id_company])->andWhere(['not', ['is_bestsale' => null]])->limit(10)->orderBy(['id' => SORT_DESC])->asArray()->all();
        }

        return $goods;
    }

    public static function getGoodsHitIndex($id_cat = null) {
        $category = $id_cat[0];
        if ($category) {
            $goods = self::find()->where(['status' => self::STATUS_ACTIVE, 'id_category' => $category])->andWhere(['not', ['is_bestsale' => null]]);
            foreach ($id_cat as $key => $category) {
                $goods->orWhere(['status' => self::STATUS_ACTIVE, 'id_category' => $category])->andWhere(['not', ['is_bestsale' => null]]);
            }
            $goods->orderBy(['id' => SORT_DESC]);
        }
        else {
            $goods = self::find()->where(['status' => self::STATUS_ACTIVE])->andWhere(['not', ['is_bestsale' => null]])->orderBy(['id' => SORT_DESC]);
        }
        return $goods;
    }

    public static function getPromotion($id_company) {
        $goods = self::find()->where(['status' => self::STATUS_ACTIVE, 'id_company' => $id_company])->andWhere(['not', ['is_promotion' => null]])->limit(10)->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $goods;
    }

    public static function getDiscount($id_company) {
        $goods = self::find()->where(['status' => self::STATUS_ACTIVE, 'id_company' => $id_company])->andWhere(['not', ['discount' => null]])->limit(10)->orderBy(['discount' => SORT_DESC])->asArray()->all();
        return $goods;
    }

    public static function imageresize($outfile, $infile, $size, $quality, $type) {
        $imageSizeArr = getimagesize($infile);
        $neww = $w = $imageSizeArr[0];
        $newh = $h = $imageSizeArr[1];
        $maxSide = max([$w, $h]);
        $k = $maxSide/$size;  //Коиффицент
        if($k>1){
            $neww = $w/$k;
            $newh = $h/$k;
        }
        if($type == 3){
            $im = imagecreatefrompng($infile);
        }elseif($type == 2){
            $im = imagecreatefromjpeg($infile);
        }
        $im1 = imagecreatetruecolor($neww,$newh);

        imagecopyresampled($im1, $im, 0, 0, 0, 0, $neww, $newh, imagesx($im), imagesy($im));
        if($type == 3){
            imagepng($im1,$outfile,9);
        }elseif($type == 2){
            imagejpeg($im1,$outfile,$quality);
        }
        imagedestroy($im);
        imagedestroy($im1);
    }
}
