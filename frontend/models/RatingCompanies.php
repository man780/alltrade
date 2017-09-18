<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_rating_companies".
 *
 * @property integer $id
 * @property integer $id_company
 * @property integer $id_user
 * @property integer $star
 */
class RatingCompanies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_rating_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_company', 'id_user', 'star'], 'required'],
            [['id_company', 'id_user', 'star'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_company' => Yii::t('app', 'Id Company'),
            'id_user' => Yii::t('app', 'Id User'),
            'star' => Yii::t('app', 'Star'),
        ];
    }
}
