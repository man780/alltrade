<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "at_news".
 *
 * @property integer $id
 * @property string $title
 * @property string $descr
 * @property string $text
 * @property string $img
 * @property integer $counter
 * @property integer $count_comment
 * @property integer $like
 * @property integer $dislike
 * @property integer $status
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descr', 'text', 'img', 'count_comment', 'like', 'dislike', 'status'], 'required'],
            [['descr', 'text'], 'string'],
            [['counter', 'count_comment', 'like', 'dislike', 'status', 'dcreated', 'bycreated', 'dmodified', 'bymodified', 'ddeleted', 'bydeleted'], 'integer'],
            [['title', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'descr' => Yii::t('app', 'Descr'),
            'text' => Yii::t('app', 'Text'),
            'img' => Yii::t('app', 'Img'),
            'counter' => Yii::t('app', 'Counter'),
            'count_comment' => Yii::t('app', 'Count Comment'),
            'like' => Yii::t('app', 'Like'),
            'dislike' => Yii::t('app', 'Dislike'),
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
