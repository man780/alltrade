<?php

namespace frontend\controllers;

class MyordersController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = 'myorders';
        return $this->render('index');
    }

}
