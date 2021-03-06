<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use backend\models\MgpAdmin;
use frontend\models\MgpPayments;
use frontend\models\MgpPaymentsSearch;
use frontend\models\MgpOwners;

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
        //return $this->render('index');
         $this->layout = false;
        $model = new MgpAdmin();
        
        return $this->render('login', [
            'model' => $model,
        ]);
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
        $model = new MgpAdmin();
// $model->load(\Yii::$app->request->post());


// if ($model->validate()) {
//     // all inputs are valid
//     die('if');
// } else {
//     // validation failed: $errors is an array containing error messages
//     $errors = $model->errors;
// }
// return $this->render('login', [
//                 'model' => $model,
//             ]);


        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // echo 'in';
            // echo '<pre>';print_r(Yii::$app->user->identity);
            return $this->redirect(['site/dashboard']);
            //  return $this->render('index', [
            //     'model' => $model,
            // ]);  
        } else {
            $this->layout = false;

            return $this->render('login', [
                'model' => $model,
            ]);
        }
       
    }

    public function actionDashboard(){
        $model = new MgpAdmin();
        return $this->render('index', [
            'model' => $model,
        ]);
    }
    public function actionPayRequestDetails()
    {
        // $this->layout = 'header';
        $searchModel = new MgpPaymentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('payrequestdetails', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
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

    public function actionApprovePaymentRequest()
    {
        $pay_id = Yii::$app->request->post('pay_id');
        // $this->layout = 'header';
        $payDetails = MgpPayments::findOne(['id'=>$pay_id]);


        $payModel = MgpPayments::findOne($pay_id);
        $payModel->status = 1;
        $payModel->save(false);
        // echo '<pre>';print_r($payDetails);die;
        $owner_id = $payDetails['uid'];  
        $ownerModel = MgpOwners::findOne($owner_id);
        $ownerModel->admin_package = 2;
        $ownerModel->save(false); 
        echo true;

        
    }



}
