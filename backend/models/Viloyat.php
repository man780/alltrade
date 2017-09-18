<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "at_viloyat".
 *
 * @property integer $id_vil
 * @property string $name
 * @property integer $kod
 */
class Viloyat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_viloyat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'kod'], 'required'],
            [['kod'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vil' => Yii::t('app', 'Id Vil'),
            'name' => Yii::t('app', 'Name'),
            'kod' => Yii::t('app', 'Kod'),
        ];
    }

    public static function getList()
    {
        $list = self::find()->all();
        return ArrayHelper::map($list, 'id_vil', 'name');
    }

    public static function getViloyatList(){
        $list = self::find()->select(['id_vil', 'name'])->asArray()->all();
        return $list;
    }
}
