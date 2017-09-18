<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/10/15
 * Time: 6:02 PM
 * To change this template use File | Settings | File Templates.
 */

namespace frontend\widgets\teamPopup;

use yii\base\Widget;
use backend\models\Clubs;
use backend\models\Countries;


class TeamPopupWidget extends Widget
{
    public $layoutPath;
    public $id_team;
    public $is_club = true;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        if($this->is_club){
            $teamModel = Clubs::getClub($this->id_team);
            $flag = Countries::getFlagUrl($teamModel->id_country);
        }else{
            $teamModel = Countries::getCountry($this->id_team);
            $flag = Countries::getFlagUrl($this->id_team);
        }
        return $this->render('index', [
            'layoutPath' => $this->layoutPath,
            'teamModel' => $teamModel,
            'flag' => $flag,
        ]);
    }
}