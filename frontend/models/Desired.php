<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_desired".
 *
 * @property integer $id
 * @property string $ip_user
 * @property integer $id_good
 * @property integer $date
 */
class Desired extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_desired';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip_user', 'id_good', 'date'], 'required'],
            [['ip_user'], 'string'],
            [['id_good', 'date'], 'integer'],
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
            'id_good' => Yii::t('app', 'Id Good'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
