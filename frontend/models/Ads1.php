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
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 */
class Ads1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'id_currency', 'id_states', 'name', 'description', 'text', 'cost','delivery'], 'required'],
            [['id_category', 'id_currency', 'id_states', 'count', 'like', 'dislike', 'rate', 'delivery', 'status'], 'integer'],
            [['text'], 'string'],
            [['cost'], 'number'],
            [['name', 'description'], 'string', 'max' => 255],
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
            'dcreated' => Yii::t('app', 'Dcreated'),
            'bycreated' => Yii::t('app', 'Bycreated'),
            'dmodified' => Yii::t('app', 'Dmodified'),
            'bymodified' => Yii::t('app', 'Bymodified'),
            'ddeleted' => Yii::t('app', 'Ddeleted'),
            'bydeleted' => Yii::t('app', 'Bydeleted'),
        ];
    }
}
