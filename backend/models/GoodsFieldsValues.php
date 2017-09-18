<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "at_goods_fields_values".
 *
 * @property integer $id
 * @property integer $id_goods_field
 * @property integer $id_good
 * @property string $value
 */
class GoodsFieldsValues extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_goods_fields_values';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_goods_field', 'value'], 'required'],
            [['id_goods_field'], 'integer'],
            [['value'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_goods_field' => Yii::t('app', 'Id Goods Field'),
            'id_good' => Yii::t('app', 'Id Good'),
            'value' => Yii::t('app', 'Value'),
        ];
    }

    public static function getFieldsValues($id_ad)
    {
        $adsFieldsValues = self::find()->where(['id_ad' => $id_ad])->asArray()->all();

        return $adsFieldsValues;
    }

    public static function getFieldsValuesGood($id_good)
    {
        $adsFieldsValues = self::find()->where(['id_good' => $id_good])->asArray()->all();

        return $adsFieldsValues;
    }
}
