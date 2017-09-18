<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_cart".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_good
 * @property integer $date
 * @property integer $count
 * @property string $size
 * @property string $color
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_good', 'date', 'count'], 'required'],
            [['id_user', 'id_good', 'date', 'count'], 'integer'],
            [['size', 'color'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_user' => Yii::t('app', 'Id User'),
            'id_good' => Yii::t('app', 'Id Good'),
            'date' => Yii::t('app', 'Date'),
            'count' => Yii::t('app', 'Count'),
            'size' => Yii::t('app', 'Size'),
            'color' => Yii::t('app', 'Color'),
        ];
    }
}
