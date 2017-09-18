<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "at_category".
 *
 * @property integer $id
 * @property integer $id_parent
 * @property integer $id_menu
 * @property string $name
 * @property string $decription
 * @property string $text
 * @property string $image
 * @property integer $status
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_parent', 'name', 'decription', 'text', 'image', 'status'], 'required'],
            [['id_parent', 'id_menu', 'status', 'dcreated', 'bycreated', 'dmodified', 'bymodified', 'ddeleted', 'bydeleted'], 'integer'],
            [['text'], 'string'],
            [['name', 'decription', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_parent' => Yii::t('app', 'Id Parent'),
            'id_menu' => Yii::t('app', 'Id Menu'),
            'name' => Yii::t('app', 'Name'),
            'decription' => Yii::t('app', 'Decription'),
            'text' => Yii::t('app', 'Text'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
            'dcreated' => Yii::t('app', 'Dcreated'),
            'bycreated' => Yii::t('app', 'Bycreated'),
            'dmodified' => Yii::t('app', 'Dmodified'),
            'bymodified' => Yii::t('app', 'Bymodified'),
            'ddeleted' => Yii::t('app', 'Ddeleted'),
            'bydeleted' => Yii::t('app', 'Bydeleted'),
        ];
    }

    
}
