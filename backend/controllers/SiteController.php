<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 7/1/16 9:57 PM
 */

namespace backend\controllers;

use common\enpii\components\NpControllerBackend;
use common\libs\ClsController;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use yii\filters\VerbFilter;
use yii;

/**
 * SiteController
 * For handling some basic actions
 * index, error, login, logout
 */
class SiteController extends ClsController
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
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                    ],
                    'matchCallback' => function () {
                        if (Yii::$app->user->can('backend-login')) {
                            return true;
                        }
                        else{
                            return false;
                        }
                    }

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get']
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
        if (!Yii::$app->user->isGuest ) {
            return $this->showDashboard();
        } else {
            return $this->redirect(Yii::$app->urlManager->createUrl('site/login'));
        }
    }

    public function showDashboard()
    {

        return $this->render('dashboard');
    }


    public function actionLogin()
    {
        $url = Yii::$app->getUrlManager()->createUrl('/enpiiCms/backend/site/login');
        return $this->redirect($url);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}
