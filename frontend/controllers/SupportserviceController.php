<?php

namespace frontend\controllers;

class SupportserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = 'supportservice';
        return $this->render('index');
    }

    public function actionSearch()
    {
    	$this->layout = 'supportservice';
        return $this->render('search');
    }

    public function actionDelivery()
    {
    	$this->layout = 'supportservice';
        return $this->render('delivery');
    }

    public function actionPayment()
    {
    	$this->layout = 'supportservice';
        return $this->render('payment');
    }

    public function actionSatisfied()
    {
    	$this->layout = 'supportservice';
        return $this->render('satisfied');
    }

    public function actionReturn()
    {
    	$this->layout = 'supportservice';
        return $this->render('return');
    }

    public function actionCancellation()
    {
    	$this->layout = 'supportservice';
        return $this->render('cancellation');
    }

    public function actionNotreceived()
    {
    	$this->layout = 'supportservice';
        return $this->render('notreceived');
    }

    public function actionFrozen()
    {
    	$this->layout = 'supportservice';
        return $this->render('frozen');
    }

    public function actionSeller()
    {
    	$this->layout = 'supportservice';
        return $this->render('seller');
    }

    public function actionStatus()
    {
    	$this->layout = 'supportservice';
        return $this->render('status');
    }
}
