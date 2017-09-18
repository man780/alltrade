<?php

namespace backend\models;

use Yii;

use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "at_states".
 *
 * @property integer $id
 * @property string $name
 */
class States extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_states';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
        ];
    }

    /**
     * Возвращает опубликованные посты
     */
    public static function getList()
    {
        $states = self::find()->all();
        return ArrayHelper::map($states, 'id', 'name');
    }


}
