<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
    public function actionMembership()
    {
        $model = new LoginForm();
         return $this->render('membership', [
                'model' => $model,
            ]);
    }
    public function actionDietplanner()
    {
        $model = new LoginForm();
         return $this->render('dietplanner', [
                'model' => $model,
            ]);
    }
    public function actionFitnesstools()
    {
       $model = new LoginForm();
         return $this->render('fitnesstools', [
                'model' => $model,
            ]);
    }
    public function actionGeneralsettings()
    {
        $model = new LoginForm();
         return $this->render('genaeralsettings', [
                'model' => $model,
            ]);
    }
    public function actionMember()
    {
        $model = new LoginForm();
         return $this->render('member', [
                'model' => $model,
            ]);
    }
    public function actionReports()
    {
        $model = new LoginForm();
         return $this->render('reports', [
                'model' => $model,
            ]);
    }
    public function actionStaffmember()
    {
        $model = new LoginForm();
         return $this->render('staffmember', [
                'model' => $model,
            ]);
    }
    public function actionSupplementation()
    {
        $model = new LoginForm();
         return $this->render('supplementation', [
                'model' => $model,
            ]);
    }
    public function actionWorkoutschedule()
    {
        $model = new LoginForm();
         return $this->render('workoutschedule', [
                'model' => $model,
            ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        // if (!Yii::$app->user->isGuest) {
        //     return $this->goHome();
        // }

        // $model = new LoginForm();
        // if ($model->load(Yii::$app->request->post()) && $model->login()) {
        //     return $this->goBack();
        // } else {
        //     $model->password = '';

        //     return $this->render('login', [
        //         'model' => $model,
        //     ]);
        // }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
