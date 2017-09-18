<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

use backend\models\Companies;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create-company', 'update-company'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $company = Companies::getCompanyByUser();

        if(is_null($company)){
            return $this->redirect('/admin/create-company',302);
        }
        return $this->render('index', [
            'company' => $company,
        ]);
    }

    public function actionCreateCompany()
    {
        $company = new Companies();
        $post = Yii::$app->request->post();
        if (count($post)>0) {
            $company->load($post);
            //vd($_FILES, false);
            $lastId = Companies::find()->count()+1;
            $imageObj = $_FILES['Companies'];
            if(is_file($imageObj['tmp_name']['image'])){
                $ext = pathinfo($imageObj['name']['image'], PATHINFO_EXTENSION);
                $path = Yii::getAlias('@webroot/images').'/companies/'.$lastId.'/1.'.$ext;
                if(!is_dir(Yii::getAlias('@webroot/images').'/companies/'.$lastId)){
                    mkdir(Yii::getAlias('@webroot/images').'/companies/'.$lastId, 0777);
                }

                move_uploaded_file($imageObj['tmp_name']['image'], $path);
            }

            //vd($company->attributes);
            if($company->save()){
                return $this->render('index', [
                    'company' => $company,
                ]);
            }else{
                vd($company->errors);
            }

        } else {
            return $this->render('create', [
                'model' => $company,
            ]);
        }
    }

    /**
     * Updates an existing Companies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateCompany()
    {
        $company = Companies::getCompanyByUser();

        if ($company->load(Yii::$app->request->post()) && $company->save()) {
            return $this->render('index', [
                'company' => $company,
            ]);
        } else {
            return $this->render('update', [
                'model' => $company,
            ]);
        }
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
