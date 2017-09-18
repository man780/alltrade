<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_elect".
 *
 * @property integer $id
 * @property string $ip_user
 * @property integer $id_ad
 * @property integer $date
 */
class Elect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_elect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip_user', 'id_ad', 'date'], 'required'],
            [['ip_user'], 'string'],
            [['id_ad', 'date'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ip_user' => Yii::t('app', 'Ip User'),
            'id_ad' => Yii::t('app', 'Id Ad'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
