<?php

namespace backend\models;

use Yii;

use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "at_countries".
 *
 * @property integer $id
 * @property string $name
 * @property integer $img
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['img'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'img' => Yii::t('app', 'Img'),
        ];
    }

    /**
     * Возвращает опубликованные посты
     */
    public static function getList()
    {
        $countries = self::find()->all();
        return ArrayHelper::map($countries, 'id', 'name');
    }
}
