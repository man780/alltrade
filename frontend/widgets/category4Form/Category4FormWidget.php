<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 6/10/16
 * Time: 5:49 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\widgets\category4Form;

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
        header('Content-Type: text/html; charset=utf-8');
        $categories = Category::getCategories4F($this->id_menu);
        $category = Category::findOne($this->id_category);
        $subcategoryidparent = $category['id_parent'];
        $this->catName = $category['name'];
        if ($subcategoryidparent != 0) {
            $category = Category::findOne($subcategoryidparent);
            $this->catName = $category['name'].' / '.$this->catName;
            $subcategoryidparent = $category['id_parent'];
        }
        if ($subcategoryidparent != 0) {
            $category = Category::findOne($subcategoryidparent);
            $this->catName = $category['name'].' / '.$this->catName;
            $subcategoryidparent = $category['id_parent'];
        }
        return $this->render('index', [
            'categories' => $categories,
            'cateName' => $this->catName,
        ]);
    }
}
