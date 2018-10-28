<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;


class DashboardController extends \yii\web\Controller

{
    public function actionIndex()

    {
		$user = Yii::$app->user->identity;
		if($user){
			$this->layout = 'dashboard';
			return $this->render('index');
		}
		return $this->goHome();

    }
    public function actionChangepassword()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('changepassword', [
                'model' => $model,
            ]);
    }
    public function actionWorkoutschedule()
    {
    	$this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('workoutschedule', [
                'model' => $model,
            ]);
    }
    public function actionDietplanner()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('dietplanner', [
                'model' => $model,
            ]);
    }
    public function actionFitnesstools()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('fitnesstools', [
                'model' => $model,
            ]);
    }
    public function actionSupplementation()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('supplementation', [
                'model' => $model,
            ]);
    }
    public function actionKnowledgecenter()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('knowledgecenter', [
                'model' => $model,
            ]);
    }
    public function actionStore()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('store', [
                'model' => $model,
            ]);
    }
    public function actionActivitybox()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('activitybox', [
                'model' => $model,
            ]);
    }
    public function actionGympackages()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('gympackages', [
                'model' => $model,
            ]);
    }
    public function actionExpensebook()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('expensebook', [
                'model' => $model,
            ]);
    }
    public function actionTraining()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('training', [
                'model' => $model,
            ]);
    }
    public function actionEmployeemgmt()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('employeemgmt', [
                'model' => $model,
            ]);
    }
    public function actionMember()
    {
        $this->layout = 'dashboard';
        $model = new LoginForm();
         return $this->render('member', [
                'model' => $model,
            ]);
    }

}

