<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Desired;
use frontend\models\Cart;
use frontend\models\Orders;

class CartController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = 'cart';
        return $this->render('index');
    }

    public function actionDesired()
    {
    	$this->layout = 'cart';
        return $this->render('desired');
    }
    
    public function actionDesiredplitka()
    {
        $this->layout = 'cart';
        return $this->render('desiredplitka');
    }

    public function actionDesiredadd($ip_user, $id_good)
    {
        $desired = new Desired();
        $desired->ip_user = $ip_user;
        $desired->id_good = $id_good;
        $desired->date = time();
        if($desired->save()){
            $desiredID = $desired->id;
            return $desiredID;
        }else{
            return false;
        }
    }

    public function actionDesireddelete($ip_user, $id_delete)
    {
        $desired = Desired::find()->where(['id' => $id_delete])->one();
        if($desired->delete()){
            $desiredcount = Desired::find()->where(['ip_user' => $ip_user])->count();
            return $desiredcount;
        }else{
            return false;
        }
    }

    public function actionAdd($id, $count, $color = false, $size = false, $idcompany)
    {
        $IDuser = \Yii::$app->user->id;
        $idCart = 0;
        $ii = 0;
        $countCart = Cart::find()->where(['id_good' => $id, 'id_user' => $IDuser])->count();
        if ($countCart > 0) {
            $goods = Cart::find()->where(['id_good' => $id, 'id_user' => $IDuser])->all();
            foreach ($goods as $key => $good) {
                if ($good->size == $size and $good->color == $color) {
                    $ii++;
                    $idCart = $good->id;
                }
            }
            if ($ii > 0) {
                $cart = Cart::find()->where(['id' => $idCart])->one();
                $cart->count = $count;
                $cart->id_shop = $idcompany;
                $cart->date = time();
                if ($cart->update()) {
                    $cartCount = Cart::find()->where(['id_user' => $IDuser])->count();
                    return $cartCount;
                }
                else {
                    return false;
                }
            }
            else {
                $cart = new Cart();
                $cart->id_good = $id;
                $cart->id_user = \Yii::$app->user->id;
                $cart->date = time();
                $cart->count = $count;
                $cart->id_shop = $idcompany;
                if($color)
                    $cart->color = $color;
                if($size)
                    $cart->size = $size;
                if($cart->save()){
                    $cartCount = Cart::find()->where(['id_user' => $IDuser])->count();
                    return $cartCount;
                }else{
                    return false;
                }
            }
        }
        else {
            $cart = new Cart();
            $cart->id_good = $id;
            $cart->id_user = \Yii::$app->user->id;
            $cart->date = time();
            $cart->count = $count;
            $cart->id_shop = $idcompany;
            if($color)
                $cart->color = $color;
            if($size)
                $cart->size = $size;
            if($cart->save()){
                $cartCount = Cart::find()->where(['id_user' => $IDuser])->count();
                return $cartCount;
            }else{
                return false;
            }
        }
    }

    public function actionDelete($id_user, $id_goodcart)
    {
        $cart = Cart::find()->where(['id' => $id_goodcart])->one();
        if($cart->delete()){
            $cart = Cart::find()->where(['id_user' => $id_user])->count();
            return $cart;
        }else{
            return false;
        }
    }

    public function actionCheckout($id_company, $id_user)
    {
        $model = new Orders();
        if ($model->load(Yii::$app->request->post())) {
            $model->date = time();
            if($model->save()){
                Yii::$app->db->createCommand()->delete('at_cart', ['id_shop' => $id_company, 'id_user' => $id_user])->execute();
                return $this->redirect(['checkoutok']);
            }else{
                vd($model->errors);
            }
        }
        else {
            $carts = Cart::find()->where(['id_shop' => $id_company, 'id_user' => $id_user])->asArray()->all();
            $carts = json_encode($carts);
            $this->layout = 'cart';
            return $this->render('checkout', [
                'carts' => $carts,
                'id_user' => $id_user,
                'model' => $model
            ]);
        }
    }

    public function actionCheckoutok()
    {
        $this->layout = 'cart';
        return $this->render('checkoutok');
    }
}
