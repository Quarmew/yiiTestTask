<?php

namespace app\controllers;

use app\models\AutoClass;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');

    }

    /**
     * Displays about page.
     *
     * @return string
     */

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionRemont()
    {
        return $this->render('remont');
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionPdr()
    {
        return $this->render('pdr');
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionPolirovka()
    {
        return $this->render('polirovka');
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionOkraska()
    {
        return $this->render('okraska');
    }
}