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
use frontend\models\MgpOtp;
use frontend\models\MgpPayments;
use frontend\models\MgpOwnerPackages;
use frontend\models\MgpAdminPackages;
use common\components\Sms;

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
            // echo '<pre>'.print_r($user,true);die;
            if($user['status'] == 1){
			  return $this->redirect(['dashboard/index']);
            }else{
                return $this->redirect(['site/package-payment']);
            }
		}else{
			$data = $model->getErrors();
            // echo '<pre>'.print_r($data,true);die;
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

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionRegister(){
        // echo '<pre>'.print_r($_POST,true);die;
        $request = Yii::$app->request->post();
        // echo '<pre>'.print_r($request);die;

        if(isset($request['MgpOwners'])){
            $model = new MgpOwners();
            $model->created_at = date('Y-m-d H:i:s');
            $model->created_by  = 0;
            $model->status = 0;
            $model->updated_by = 1;
            $model->updated_by = 1;
            $model->address = isset($request['address'])?$request['address']:'';
            // echo '<pre>'.print_r($model->validate());die;

            if ($model->load($request) && $model->validate()) {
                $to = $model->mobile_no;
                $model->password = $model->setPassword($model->password);
                // $model->save();
                if($model->save()){                  
                
                    $otp_code = strtoupper(substr(md5(uniqid()), 0, 6));

                    //saving OTP in db
                    $otpModel = new MgpOtp();
                    $otpModel->user_type    = 'O'; 
                    $otpModel->uid          = $model->id; 
                    $otpModel->otp          = $otp_code; 
                    $otpModel->created_at   = date('Y-m-d H:i:s'); 
                    $otpModel->save();
                    // if(!$otpModel->save())
                    // {
                    //     var_dump($otpModel->getErrors());
                    // } 
                    // die;

                    $text = 'Thank you for Registering on MYGymPartner. Your verification OTP Code is '.$otp_code;
                    $result = Yii::$app->Sms->sendSms($to, $text);
                    // $res = explode("[",$result);
                    // Yii::$app->session->setFlash('success', 'Your account has been successfully registered . Please verify with OTP PIN . ');

                    $session = Yii::$app->session;
                    $session->set('user_id', $model->id);  // will be unset after otp modal generates
                    $session->set('op_user_id', $model->id);
                    // if(ltrim($res[0])=='OK ' && $otp_sent){
                    //  Yii::$app->session->setFlash('success', 'Your account has been successfully registered . Please verify with OTP PIN . ');
                    // }else{
                    //  Yii::$app->session->setFlash('success', $result);
                    // }
                }
                
                // return $this->goHome();
                return $this->redirect(['site/otp-check']);

            }else {
                // HERE YOU CAN PRINT THE ERRORS OF MODEL
                $data = $model->getErrors();
                // print_r($data);die;
                if(isset($data['email'])){
                    Yii::$app->session->setFlash('error', $data['email'][0]);// its dislplays error msg on your form    
                }
                if(isset($data['username'])){
                    Yii::$app->session->setFlash('error', $data['username'][0]);// its dislplays error msg on your form    
                }
                if(isset($data['mobile'])){
                    Yii::$app->session->setFlash('error', $data['mobile'][0]);// its dislplays error msg on your form    
                }

                return $this->goHome();
            }

         }else{     //member registration

            $model = new MgpMembers();
            $model->created_at = date('Y-m-d H:i:s');
                $model->created_by  = 1;
                $model->updated_by = 1;
                $model->status = 0;
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

    public function actionVerifyOtp()
    {
        // $otpcode    = '414710';
        // $uid        = 15;
        // $user_type  = 'O';

         $form_data = Yii::$app->request->post();
        // echo '<pre>'.print_r($form_data,true);die;
         $otpcode    = $form_data['otp'];
         // $uid        = $form_data['uid'];
         $session = Yii::$app->session;
         $uid = $form_data['uid'];
         // $uid = $session->get('op_user_id');
         $user_type  = $form_data['user_type'];

        if(empty($otpcode) || empty($uid) ){
            $return = array('status'=>0,'msg'=>'OTP and Userid fields are required.');
        }else{ 
            // $otpcode    = Yii::$app->request->post('otpcode');
            // $uid        = Yii::$app->request->post('uid');
            // $user_type  = Yii::$app->request->post('user_type');
            $otpForm     = new MgpOtp();
            $otpData = $otpForm::findOne(['user_type'=>$user_type,'uid'=>$uid,'otp'=>$otpcode]);
            if($otpData){
                $ownerModel = MgpOwners::findOne($uid);
                // echo '<pre>'.print_r($ownerModel,true);dsie;
                $ownerModel->otp_status = 1;
                if($ownerModel->save(false)){
                     Yii::$app->session->setFlash('success', 'Your account has been successfully registered.');
                    $return = array('status'=>1,'msg'=>'OTP Status updated successfully.');
                }else{
                    $return = array('status'=>0,'msg'=>'Failed to update OTP.');
                }
            }else{
                $return = array('status'=>0,'msg'=>'OTP mismatched. Plase enter valid OTP received in your given Mobile No.');
            }
            echo json_encode($return);  //<pre>'.print_r($return,true);
            die;
        }
        

    }

    public function actionPackagePayment()
    {

        $this->layout = 'dashboard';
        $user = Yii::$app->user->identity;
        // var_dump($user);
        if($user['admin_package'] == 2 ){
            return $this->redirect(['site/owner-packages']);
        }else{
            $model = new MgpPayments();        
             return $this->render('payment', [
                    'model' => $model,
                    'user_details'=> $user
                ]);    
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

    public function actionSubmitPackagePaymentDetails()
    {
        $form_data = Yii::$app->request->post();
        $paymentModel = new MgpPayments();
        $paymentModel->user_type = $form_data['MgpPayments']['user_type'];
        // $uid = \Yii::$app->user->identity->id;
        $uid = Yii::$app->user->id;
        // echo '<pre>'.print_r('udiu',true);die;
        $paymentModel->uid = $uid;
        $paymentModel->payment_method_id = $form_data['MgpPayments']['payment_method_id'];
        $paymentModel->package_id = $form_data['MgpPayments']['package_id'];
        $paymentModel->reference_no = isset($form_data['MgpPayments']['reference_no']) ? $form_data['MgpPayments']['reference_no'] : '' ;
        $paymentModel->insert_time = date('Y-m-d H:i:s');
        

        if($paymentModel->save(false)){
            $ownerModel = MgpOwners::findOne($uid);
                // echo '<pre>'.print_r($ownerModel,true);dsie;
            $ownerModel->admin_package = 1;
            $ownerModel->save(false);
            echo 1;
        }else{
            echo 0;
        }
        
        
        die;
    }

    public function actionOwnerPackages()
    {
        $this->layout = 'dashboard';
        $model = new MgpOwnerPackages();
         return $this->render('owner_packages', [
                'model' => $model,
            ]);
    }

    public function actionSubmitOwnerPackageDetails()
    {
        $form_data = Yii::$app->request->post();
        $ownerPackageModel = new MgpOwnerPackages();
        $ownerPackageModel->package_type_id = $form_data['MgpOwnerPackages']['package_type_id'];
        $uid = Yii::$app->user->id;
        $ownerPackageModel->uid = $uid;
        $ownerPackageModel->duration = $form_data['MgpOwnerPackages']['duration'];
        $ownerPackageModel->amount = $form_data['MgpOwnerPackages']['amount'];
        $ownerPackageModel->specifications = $form_data['MgpOwnerPackages']['specifications'];
        $ownerPackageModel->status = 1;
        $ownerPackageModel->created_at = date('Y-m-d H:i:s');
        $ownerPackageModel->created_by = $uid;
        

        if($ownerPackageModel->save(false)){
            echo 1;
        }else{
            echo 0;
        }
        
        
        die;
    }


    public function actionCheckout()
    {
        $model = new ContactForm();
        return $this->render('checkout', [
                'model' => $model,
            ]);
    }

    public function actionFetchPackageAmount()
    {
        $adminPackageModel  =   new MgpAdminPackages();
        $package_id = Yii::$app->request->post('package_id');
        $packageData = $adminPackageModel::findOne(['id'=>$package_id,'status'=>1]);
        echo $packageData['amount'];
        die;
    }

     public function actionOtpCheck()
    {
        $this->layout = false;
        // $user = Yii::$app->user->identity;
        $model = new MgpPayments();        
       
         return $this->render('otp', [
                    'model' => $model,
                    // 'user_details'=> $user
                ]);
        
    }


     public function actionResendOtp()
    {
        $form_data = Yii::$app->request->post();
        // echo '<pre>'.print_r($form_data,true);die;
         $session = Yii::$app->session;
         $uid = $form_data['uid'];
         // $uid = $session->get('op_user_id');
         $user_type  = $form_data['user_type'];

        if(empty($uid) ){
            $return = array('status'=>0,'msg'=>'Failed to send the OTP');
        }else{           
            $ownerData = MgpOwners::findOne(['id'=>$uid]);
            $otp_code = strtoupper(substr(md5(uniqid()), 0, 6));
            $text = 'Your verification OTP Code is '.$otp_code;
            $result = Yii::$app->Sms->sendSms($ownerData['mobile_no'], $text);

            // change otp 
             $otpModel = MgpOtp::findOne(['uid'=>$uid]);
             $otpModel->otp = $otp_code;

            if($otpModel->save(false)){
                
                    $return = array('status'=>1,'msg'=>'OTP sent to the registered mobile.');
                
            }else{
                $return = array('status'=>0,'msg'=>'Failed to resend otp.');
            }
            echo json_encode($return);  
            die;
        }
        
    }

  
}
