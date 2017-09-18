<?php

namespace backend\models;

use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "at_goods_fields".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $name
 * @property string $type
 * @property string $option
 */
class GoodsFields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_goods_fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'name', 'type'], 'required'],
            [['id_category'], 'integer'],
            [['option'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 50]
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
            'type' => Yii::t('app', 'Type'),
            'option' => Yii::t('app', 'Option'),
        ];
    }

    public static function getList()
    {
        $goodsFields = self::find()/*->where(['status' => self::STATUS_ACTIVE])*/->all();
        
        return ArrayHelper::map($goodsFields, 'id', 'name');        
    }

    public static function getFieldsByCat($id_category)
    {
        $goodsFields = self::find()->where(['id_category' => $id_category])->all();
        return $goodsFields;        
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
