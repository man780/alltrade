<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/10/15
 * Time: 2:24 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\widgets\category;

use yii\base\Widget;
use yii\helpers\Html;
use backend\models\Category;
//use backend\models\Clubs;

class CategoryWidget extends Widget
{

    public $id_menu;
    public $id_user;

    //private $user_data;
    public function init()
    {
        parent::init();

        $this->id_user = \Yii::$app->user->id;
    }

    public function run()
    {
        //vd($this->table);
        /*$this->user_data['fan_club'] = 19;
        $this->user_data['root_for_clubs'] = [1,8,5];
        $this->user_data['root_for_country'] = [1,2];
        $this->user_data['root_for_soccer'] = [1];*/
        $categories = Category::getCategories4F($this->id_menu);
        //vd($categories);
        //$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
        return $this->render('index', [
            'categories' => $categories,
            //'layoutPath' => $this->layoutPath,
            //'user_data' => $this->user_data
        ]);
    }
}
