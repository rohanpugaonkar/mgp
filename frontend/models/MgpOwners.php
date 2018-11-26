<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_owners".
 *
 * @property int $id
 * @property string $gym_name
 * @property string $owner_name
 * @property int $mobile_no
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $address
 * @property int $pincode
 * @property int $city
 * @property int $state
 * @property int $country
 * @property int $otp_status 1=Done,0=Not Done
 * @property int $admin_package
 * @property int $gym_package_status 1=Done,0=Not Done
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 */
class MgpOwners extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    const STATUS_ACTIVE = 1;
    public $password_hash;
    public $auth_key;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_owners';
    }

    /**
     * {@inheritdoc}
     */
    // public function rules()
    // {
    //     return [
    //         [['gym_name', 'owner_name', 'mobile_no', 'email', 'username', 'password', 'address', 'pincode', 'city', 'state', 'country', 'status', 'created_at', 'created_by', 'updated_by'], 'required'],
    //         [['mobile_no', 'pincode', 'city', 'state', 'country', 'otp_status', 'admin_package', 'gym_package_status', 'status', 'created_by', 'updated_by'], 'integer'],
    //         [['address'], 'string'],
    //         [['created_at', 'updated_at'], 'safe'],
    //         [['gym_name', 'owner_name', 'username'], 'string', 'max' => 50],
    //         [['email'], 'string', 'max' => 256],
    //         [['password'], 'string', 'max' => 250],
    //     ];
    // }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gym_name', 'owner_name', 'mobile_no', 'email', 'username', 'password', 'address', 'pincode', 'city', 'state', 'country', 'status', 'created_at', 'created_by'], 'required'],
            [['mobile_no', 'pincode', 'status'], 'integer'],
            [['address'], 'string'],
            [['mobile_no'], 'string','min'=> 10, 'max' => 12,'tooLong'=>"Mobile must be atleast 10 characters long"],
            ['email','email'],
            ['pincode', 'isPincode'],
            [['email'],'unique', 'message'=> 'Email already exist', 'targetClass' => '\frontend\models\MgpOwners'],
            [['created_at', 'updated_at'], 'safe'],
            [['gym_name', 'owner_name', 'username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 250],
            [['password'], 'match', 'pattern' => '/^(?=.*[0-9])(?=.*[A-Z])([a-zA-Z0-9]+)$/' , 'message'=> 'Password must contain a Number, Capital letter and Small letter.'],
            [['email'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gym_name' => 'Gym Name',
            'owner_name' => 'Owner Name',
            'mobile_no' => 'Mobile No',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'address' => 'Address',
            'pincode' => 'Pincode',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'otp_status' => 'Otp Status',
            'admin_package' => 'Admin Package',
            'gym_package_status' => 'Gym Package Status',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'otp_status' => self::STATUS_ACTIVE]);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }
    
     public function isPincode($attribute)
    {
        if (!preg_match('/^[1-9][0-9]{5}$/', $this->$attribute)) {
            $this->addError($attribute, 'Must contain exactly 6 digits.');
        }

    }
    
    public static function findByEmail($email)
    {
        $exists = self::find()->where(['email' => $email])->exists();
        if(empty($exists)){ //if user does not exist in tblmembers then check in tbltempmembers
            $tmpexists = MgpOwners::find()->where(['email' => $email])->exists();
            if($tmpexists){ //registered email but not verified
                return false;
            }
            else{ //unregistered email
                return true;
            }
        }
        return self::findOne(['email' => $email]);
    }
    
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'otp_status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    
    
    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        return $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }


}
