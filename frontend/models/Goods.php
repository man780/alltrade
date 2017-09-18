<?php

namespace frontend\models;

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
            [['id_category', 'id_currency', 'name', 'description', 'text', 'cost', 'delivery' ], 'required'],
            [['id_category'], 'integer'],
            [['text'], 'string'],            
            //[['name', 'description', 'color', 'size', 'image'], 'string', 'max' => 255]
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
}
