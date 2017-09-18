<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_ads".
 *
 * @property integer $id
 * @property integer $id_category
 * @property integer $id_currency
 * @property integer $id_states
 * @property string $name
 * @property string $description
 * @property string $text
 * @property integer $count
 * @property double $cost
 * @property integer $like
 * @property integer $dislike
 * @property integer $rate
 * @property integer $delivery
 * @property string $image
 * @property integer $status
 * @property integer $id_viloyat
 * @property integer $id_tuman
 * @property string $contact_name
 * @property string $contact_phone
 * @property string $contact_phone_attributes
 * @property string $contact_email
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_ads';
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'id_currency', 'name', 'text'], 'required'],
            [['id_category', 'id_states', 'count', 'like', 'dislike', 'rate', 'delivery', 'status', 'id_viloyat', 'id_tuman'], 'integer'],
            [['text'], 'string'],
            [['cost'], 'number'],
            [['name', 'description', 'contact_name',/* 'contact_phone',*/ 'contact_email'], 'string', 'max' => 255],
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
            'id_currency' => Yii::t('app', 'Id Currency'),
            'id_states' => Yii::t('app', 'Id States'),
            'name' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'text' => Yii::t('app', 'Text'),
            'count' => Yii::t('app', 'Count'),
            'cost' => Yii::t('app', 'Cost'),
            'like' => Yii::t('app', 'Like'),
            'dislike' => Yii::t('app', 'Dislike'),
            'rate' => Yii::t('app', 'Rate'),
            'delivery' => Yii::t('app', 'Delivery'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
            'id_viloyat' => Yii::t('app', 'Id Viloyat'),
            'id_tuman' => Yii::t('app', 'Id Tuman'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'contact_phone' => Yii::t('app', 'Contact Phone'),
            'contact_phone_attributes' => Yii::t('app', 'Contact Phone Attributes'),
            'contact_email' => Yii::t('app', 'Contact Email'),
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

    public static function getList($limit = 10)
    {
        //$id_user = Yii::$app->user->id;
        $ads = self::find()->where(['status' => 1])->orderBy('view DESC')->limit($limit)->all();
        return $ads;
    }
}
