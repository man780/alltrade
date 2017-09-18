<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_subscribe".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_shop
 * @property integer $date
 */
class Subscribe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_subscribe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_shop', 'date'], 'required'],
            [['id_user', 'id_shop', 'date'], 'integer'],
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
            'id_shop' => Yii::t('app', 'Id Shop'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
