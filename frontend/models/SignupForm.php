<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $role;
    public $gymowner;
    public $gymname;
    public $mobile;
    public $address;
    public $pincode;
    public $city;
    public $state;
    public $country;
    public $username;
    public $email;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['role', 'trim'],
            ['role', 'required'],
			
            ['gymname', 'trim'],
            ['gymname', 'required'],
			
			['gymowner', 'trim'],
            ['gymowner', 'required'],
			
			['mobile', 'trim'],
            ['mobile', 'required'],
		    ['mobile', 'integer', 'min' => 10, 'max' => 13],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
			
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
			
			['address', 'trim'],
            ['address', 'required'],
            ['address', 'email'],
            ['address', 'string', 'max' => 300],
			
			['pincode', 'required'],
            ['pincode', 'integer', 'min' => 6,'max'=>6],
			
			['city', 'trim'],
            ['city', 'required'],
			
			['state', 'trim'],
            ['state', 'required'],
			
			['country', 'trim'],
            ['country', 'required'],
			
			
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
