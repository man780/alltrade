<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 6/10/16
 * Time: 5:49 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\widgets\leftMenuFields;

use yii\base\Widget;
use yii\helpers\Html;
use backend\models\GoodsFields;
use backend\models\Tuman;


class LeftMenuFieldsWidget extends Widget
{

    public $id_category;
    public $id_user;

    private $valueViloyat;
    private $valueTuman;

    public function init()
    {
        parent::init();
        
        $this->id_user = \Yii::$app->user->id;
    }

    public function run()
    {
        
        
        $fields = GoodsFields::find()->where(['id_category' => $this->id_category])->all();
        
        return $this->render('index', [            
            'fields' => $fields,
        ]);
    }
}
