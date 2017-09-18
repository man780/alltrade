<?php

namespace frontend\controllers;

use frontend\models\Elect;

class ElectController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = 'elect';
        return $this->render('index');
    }

    public function actionAdd($ip_user, $id_ad)
    {
        $elect = new Elect();
        $elect->ip_user = $ip_user;
        $elect->id_ad = $id_ad;
        $elect->date = time();
        if($elect->save()){
            $electCount = $elect->id;
            return $electCount;
        }else{
            return false;
        }
    }

    public function actionDelete($ip_user, $id_delete)
    {
        $elect = Elect::find()->where(['id' => $id_delete])->one();
        if($elect->delete()){
            $electCount = Elect::find()->where(['ip_user' => $ip_user])->count();
            return $electCount;
        }else{
            return false;
        }
    }

    public function actionDeleteelect($id)
    {
        $elect = Elect::find()->where(['id' => $id])->one();
        $elect->delete();
        return $this->redirect(['index']);
    }

}
