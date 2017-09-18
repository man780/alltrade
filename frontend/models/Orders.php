<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_orders".
 *
 * @property integer $id
 * @property integer $id_user
 * @property string $name
 * @property integer $id_viloyat
 * @property integer $id_tuman
 * @property string $address
 * @property integer $postcode
 * @property string $phone
 * @property integer $date
 * @property string $orders
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'name', 'id_viloyat', 'id_tuman', 'address', 'postcode', 'phone', 'date', 'orders'], 'required'],
            [['id_user', 'id_viloyat', 'id_tuman', 'postcode', 'date'], 'integer'],
            [['name', 'address', 'phone', 'orders'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_user' => Yii::t('app', 'Id User'),
            'name' => Yii::t('app', 'Name'),
            'id_viloyat' => Yii::t('app', 'Id Viloyat'),
            'id_tuman' => Yii::t('app', 'Id Tuman'),
            'address' => Yii::t('app', 'Address'),
            'postcode' => Yii::t('app', 'Postcode'),
            'phone' => Yii::t('app', 'Phone'),
            'date' => Yii::t('app', 'Date'),
            'orders' => Yii::t('app', 'Orders'),
        ];
    }
}
