<?php

namespace frontend\controllers;

use \frontend\themes\alltrade\assets\AppAssets;

class FooterController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = 'footer';
        return $this->render('index');
    }
    public function actionBargain()
    {
    	$this->layout = 'footer';
        return $this->render('bargain');
    }
    public function actionSitemap($id)
    {
        $this->layout = 'footersitemap';
        return $this->render('sitemap', [
            'id' => $id
        ]);
    }

}
