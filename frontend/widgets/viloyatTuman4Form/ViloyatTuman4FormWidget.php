<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 6/10/16
 * Time: 5:49 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\widgets\viloyatTuman4Form;

use yii\base\Widget;
use yii\helpers\Html;
use backend\models\Viloyat;
use backend\models\Tuman;


class ViloyatTuman4FormWidget extends Widget
{

    public $id_viloyat;
    public $id_tuman;
    public $id_user;

    private $valueViloyat;
    private $valueTuman;

    public function init()
    {
        parent::init();

        $this->valueTuman = '';
        $this->valueViloyat = '';
        $this->id_user = \Yii::$app->user->id;
    }

    public function run()
    {
        $viloyats = Viloyat::getViloyatList();
        $tumans = Tuman::getListWithParent();
        $viloyat = Viloyat::findOne($this->id_viloyat);
        $this->valueViloyat = $viloyat['name'];
        $tuman = Tuman::findOne($this->id_tuman);
        $this->valueTuman = $tuman['name'];
        
        return $this->render('index', [
            'viloyats' => $viloyats,
            'tumans' => $tumans,
            'valueViloyat' => $this->valueViloyat,
            'valueTuman' => $this->valueTuman,
        ]);
    }
}
