<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_ads_costs".
 *
 * @property integer $id
 * @property integer $id_ad
 * @property integer $cost
 * @property integer $id_currency
 * @property integer $id_user
 * @property integer $dcreated
 */
class AdsCosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_ads_costs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ad', 'cost', 'id_currency', 'id_user', 'dcreated'], 'required'],
            [['id_ad', 'cost', 'id_currency', 'id_user', 'dcreated'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_ad' => Yii::t('app', 'Id Ad'),
            'cost' => Yii::t('app', 'Cost'),
            'id_currency' => Yii::t('app', 'Id Currency'),
            'id_user' => Yii::t('app', 'Id User'),
            'dcreated' => Yii::t('app', 'Dcreated'),
        ];
    }
}
