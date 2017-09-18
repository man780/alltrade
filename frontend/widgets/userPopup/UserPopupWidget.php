<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/10/15
 * Time: 8:54 PM
 * To change this template use File | Settings | File Templates.
 */

namespace frontend\widgets\userPopup;

use yii\base\Widget;
use backend\models\Soccers;
use backend\models\Clubs;
use backend\models\Countries;
class UserPopupWidget extends Widget
{
    public $layoutPath;
    public $id_soccer;
    public $is_user;

    public function init()
    {
        parent::init();

    }

    public function run()
    {

        if($this->is_user){

        }else{
            $userModel = Soccers::getSoccer($this->id_soccer);
            $club = Clubs::getClubName($userModel->id_club);
            $flag = '';
            if(!is_null($userModel->id_country) AND !is_null(Countries::getFlagUrl($userModel->id_country))){
                $flag = Countries::getFlagUrl($userModel->id_country);
            }
        }

        return $this->render('index', [
            'layoutPath' => $this->layoutPath,
            'userModel' => $userModel,
            'club' => $club,
            'flag' => $flag,
        ]);
    }
}
