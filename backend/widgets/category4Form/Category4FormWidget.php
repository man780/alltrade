<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 6/10/16
 * Time: 5:49 PM
 * To change this template use File | Settings | File Templates.
 */
namespace backend\widgets\category4Form;

use yii\base\Widget;
use yii\helpers\Html;
use backend\models\Category;


class Category4FormWidget extends Widget
{

    public $id_menu;
    public $id_user;
    public $id_category;

    private $catName;
    public function init()
    {
        parent::init();

        $this->catName = '';

        $this->id_user = \Yii::$app->user->id;
    }

    public function run()
    {
        $categories = Category::getCategories4F(2);
        $category = Category::findOne($this->id_category);
        $this->catName = $category['name'];
        return $this->render('index', [
            'categories' => $categories,
            'cateName' => $this->catName,
        ]);
    }
}
