<?php

namespace backend\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "at_companies".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_user
 * @property integer $status
 * @property integer $dcreated
 * @property integer $bycreated
 * @property integer $dmodified
 * @property integer $bymodified
 * @property integer $ddeleted
 * @property integer $bydeleted
 * @property string $text
 * @property string $image
 * @property string $address
 * @property string $phone
 * @property integer $id_country
 * @property string $gallery
 * @property integer $rate
 * @property integer $like
 * @property integer $dislike
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'at_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'address', 'phone', 'mail'], 'required'],
            [['id_user', 'status', 'id_country', 'rate', 'like', 'dislike'], 'integer'],
            [['text', 'address', 'gallery'], 'string'],
            [['name', 'image', 'phone'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Название компании'),
            'link' => Yii::t('app', 'Линк компании(Ссылка)'),
            'id_user' => Yii::t('app', 'Id User'),
            'status' => Yii::t('app', 'Status'),
            'dcreated' => Yii::t('app', 'Dcreated'),
            'bycreated' => Yii::t('app', 'Bycreated'),
            'dmodified' => Yii::t('app', 'Dmodified'),
            'bymodified' => Yii::t('app', 'Bymodified'),
            'ddeleted' => Yii::t('app', 'Ddeleted'),
            'bydeleted' => Yii::t('app', 'Bydeleted'),
            'text' => Yii::t('app', 'Информация о компании'),
            'image' => Yii::t('app', 'Логотип компании'),
            'address' => Yii::t('app', 'Address'),
            'phone' => Yii::t('app', 'Phone'),
            'id_country' => Yii::t('app', 'Id Country'),
            'gallery' => Yii::t('app', 'Gallery'),
            'rate' => Yii::t('app', 'Rate'),
            'like' => Yii::t('app', 'Like'),
            'dislike' => Yii::t('app', 'Dislike'),
            'mail' => Yii::t('app', 'Mail'),
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($insert){
                $this->dcreated = time();
                $this->bycreated =  Yii::$app->user->getId();
                $this->id_user =  Yii::$app->user->getId();
            }else{
                $this->dmodified = time();
                $this->bymodified =  Yii::$app->user->getId();
            }
            return true;
        } else {

            return false;
        }
    }

    /**
     * Возвращает опубликованные посты
     */
    public static function getList()
    {
        $companies = self::find()->all();
        return ArrayHelper::map($companies, 'id', 'name');
    }

    public static function getCompany($id)
    {
        //$id_user = Yii::$app->user->id;
        $company = self::find()->where(['id' => $id])->one();
        return $company;
    }

    public static function getCompanies($is_local = true)
    {
        //$id_user = Yii::$app->user->id;
        $company = self::find()->where([])->limit(5)->all();
        return $company;
    }

    public static function getCompanyByUser()
    {
        $id_user = Yii::$app->user->id;
        $company = self::find()->where(['id_user' => $id_user])->one();
        return $company;
    }

    public static function getCompanyCats()
    {
        $id_user = Yii::$app->user->id;
        $company = self::find()->select('cats')->where(['id_user' => $id_user])->one();
        return $company;
    }

    public static function getCompanyCatsById($id)
    {
        //$id_user = Yii::$app->user->id;
        $company = self::find()->select('cats')->where(['id' => $id])->one();
        return $company;
    }

}
