<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
 use frontend\models\MgpCities;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\MgpOwners;
use frontend\models\MgpMembers;

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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	public function actionTest()
    {
		// $to ='8652684335';
		// $text = 'Thank you for Registering on MYGymPartner. Your verification OTP Code is 67676';
        // $result = Yii::$app->Sms->sendSms($to, $text);
		// $res = explode("[",$result);
			// if(ltrim($res[0])=='OK '){
				// echo $res[0];
			// }else{
				// echo $res[0];
			// }
    }
    public function actionPricing()
    {
        return $this->render('pricing');
    }
    public function actionFeatures()
    {
        return $this->render('features');
    }
    public function actionBlog()
    {
        return $this->render('blog');
    }
    public function actionBlogdetail()
    {
        $model = new ContactForm();
        return $this->render('blog-detail', [
                'model' => $model,
            ]);
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        // if (!Yii::$app->user->isGuest) {
            // return $this->goHome();
        // }
		
		$request = Yii::$app->request->post();
        $model = new LoginForm();
        if ($model->load($request) && $model->login()) {
			$user = Yii::$app->user->identity;
			  return $this->redirect(['dashboard/index']);
		}else{
			$data = $model->getErrors();
            Yii::$app->session->setFlash('error', $data['password'][0]);// its dislplays error msg on your form
            return $this->goHome();
			// return $this->goBack();
		}
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
	
	public function actionRegister(){
		
		$request = Yii::$app->request->post();

        if(isset($request['MgpOwners'])){
            $model = new MgpOwners();
    		$model->created_at = date('Y-m-d H:i:s');
			$model->created_by  = 'Self';
			$model->status = 1;
            $model->updated_by = 1;
			$model->address = isset($request['address'])?$request['address']:'';

            if ($model->load($request)&& $model->validate()) {
				$to = $model->mobile_no;
    			$model->password = $model->setPassword($model->password);
    			$model->save();
				
				$otp_code = strtoupper(substr(md5(uniqid()), 0, 6));
				$text = 'Thank you for Registering on MYGymPartner. Your verification OTP Code is '.$otp_code;
				$result = Yii::$app->Sms->sendSms($to, $text);
				$res = explode("[",$result);
				if(ltrim($res[0])=='OK '){
					Yii::$app->session->setFlash('success', 'Your account has been successfully registered . Please verify with OTP PIN . ');
				}else{
					Yii::$app->session->setFlash('success', $result);
				}
    			return $this->goHome();

    		}else {
    			// HERE YOU CAN PRINT THE ERRORS OF MODEL
    			$data = $model->getErrors();
    			// print_r($data);
    			Yii::$app->session->setFlash('error', $data['email'][0]);// its dislplays error msg on your form
    			return $this->goHome();
    		}

         }else{     //member registration

            $model = new MgpMembers();
            $model->created_at = date('Y-m-d H:i:s');
                $model->created_by  = 1;
                $model->updated_by = 1;
                $model->status = 1;
                $model->address = isset($request['address'])?$request['address']:'';
            if ($model->load($request)&& $model->validate()) {
                $model->save(); 
                Yii::$app->session->setFlash('success', 'Your account has been successfully registered. Please verify with OTP . ');
                return $this->goHome();

            }else {
                // HERE YOU CAN PRINT THE ERRORS OF MODEL
                $data = $model->getErrors();
                // print_r($data);die;
                Yii::$app->session->setFlash('error', $data['email'][0]);// its dislplays error msg on your form
                return $this->goHome();
            }
         }      
	}


    public function actionGetStateCities()
    {
        $model = new MgpCities();
        $state_id = Yii::$app->request->post('state_id');

        $city_data = $model::find()->where(['state_id'=>$state_id])->all();
        // echo '<pre>'.print_r($city_data);die;
        if(!empty($city_data))
        {
            $options = '<option value="">Select City</option>';
            foreach($city_data as $oneCity)
            {
                $options .= '<option value="'.$oneCity['city_id'].'">'.$oneCity['city_name'].'</option>';
            }
        }else{
            $options = '';
        }
        return $options;

    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
