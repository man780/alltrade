<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "at_tuman".
 *
 * @property integer $id_tuman
 * @property integer $id_vil
 * @property string $name
 * @property integer $kod
 * @property string $tel
 * @property string $addr
 */
class Tuman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_tuman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_vil', 'name', 'kod', 'tel', 'addr'], 'required'],
            [['id_vil', 'kod'], 'integer'],
            [['addr'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['tel'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tuman' => Yii::t('app', 'Id Tuman'),
            'id_vil' => Yii::t('app', 'Id Vil'),
            'name' => Yii::t('app', 'Name'),
            'kod' => Yii::t('app', 'Kod'),
            'tel' => Yii::t('app', 'Tel'),
            'addr' => Yii::t('app', 'Addr'),
        ];
    }

    public static function getList()
    {
        $list = self::find()->all();
        return ArrayHelper::map($list, 'id_tuman', 'name');
    }

    public static function getListWithParent(){
        $list = self::find()->select(['id_tuman', 'id_vil', 'name'])->asArray()->all();
        return $list;
    }

}
