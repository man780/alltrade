<?php

namespace backend\models;

use Yii;

use backend\models\Category;

use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "at_brands".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $gallery
 * @property integer $rate
 * @property string $text
 * @property integer $id_country
 */
class Brands extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_brands';
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
            [['name'], 'required'],
            [['text'], 'string'],
            [['rate', 'id_country'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'gallery' => Yii::t('app', 'Gallery'),
            'rate' => Yii::t('app', 'Rate'),
            'text' => Yii::t('app', 'Text'),
            'id_country' => Yii::t('app', 'Id Country'),
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
     */
    public static function getList()
    {
        $brands = self::find()->all();
        return ArrayHelper::map($brands, 'id', 'name');
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }

    public function getCategoryName()
    {
        $category = $this->category;
     
        return $category ? $category->name : '';
    }
}
