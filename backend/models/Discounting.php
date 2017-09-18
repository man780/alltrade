<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "at_discounting".
 *
 * @property integer $id
 * @property integer $id_good
 * @property integer $dbegin
 * @property integer $dend
 * @property integer $count
 * @property double $cost
 * @property integer $type
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 */
class Discounting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_discounting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_good', 'dbegin', 'dend', 'count', 'cost', 'type'], 'required'],
            [['id_good', 'dbegin', 'dend', 'count', 'type', 'dcreated', 'bycreated', 'dmodified', 'bymodified', 'ddeleted', 'bydeleted'], 'integer'],
            [['cost'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_good' => Yii::t('app', 'Id Good'),
            'dbegin' => Yii::t('app', 'Dbegin'),
            'dend' => Yii::t('app', 'Dend'),
            'count' => Yii::t('app', 'Count'),
            'cost' => Yii::t('app', 'Cost'),
            'type' => Yii::t('app', 'Type'),
            'dcreated' => Yii::t('app', 'Dcreated'),
            'bycreated' => Yii::t('app', 'Bycreated'),
            'dmodified' => Yii::t('app', 'Dmodified'),
            'bymodified' => Yii::t('app', 'Bymodified'),
            'ddeleted' => Yii::t('app', 'Ddeleted'),
            'bydeleted' => Yii::t('app', 'Bydeleted'),
        ];
    }
}
