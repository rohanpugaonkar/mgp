<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_owners".
 *
 * @property int $id
 * @property string $gym_name
 * @property string $owner_name
 * @property string $mobile_no
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $address
 * @property int $pincode
 * @property int $city
 * @property int $state
 * @property int $country
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 */
class MgpOwners extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
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
    public function rules()
    {
        return [
            [['gym_name', 'owner_name', 'mobile_no', 'email', 'username', 'password', 'address', 'pincode', 'city', 'state', 'country', 'status', 'created_at', 'created_by', 'updated_by'], 'required'],
            [['mobile_no', 'pincode', 'status', 'created_by', 'updated_by'], 'integer'],
            [['address'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['gym_name', 'owner_name', 'username', 'password'], 'string', 'max' => 50],
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
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

}
