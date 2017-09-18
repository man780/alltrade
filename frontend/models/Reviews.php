<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_reviews".
 *
 * @property integer $id
 * @property integer $id_shop
 * @property integer $id_user
 * @property integer $date
 * @property string $text
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_shop', 'id_user', 'date', 'text'], 'required'],
            [['id_shop', 'id_user', 'date'], 'integer'],
            [['text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_shop' => Yii::t('app', 'Id Shop'),
            'id_user' => Yii::t('app', 'Id User'),
            'date' => Yii::t('app', 'Date'),
            'text' => Yii::t('app', 'Text'),
        ];
    }
}
