<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_members".
 *
 * @property int $id
 * @property int $gym_owner_id
 * @property string $member_name
 * @property string $mobile_no
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $address
 * @property int $pincode
 * @property int $city
 * @property string $state
 * @property string $country
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 */
class MgpMembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gym_owner_id', 'member_name', 'mobile_no', 'email', 'username', 'password', 'address', 'pincode', 'city', 'state', 'country', 'status', 'created_at', 'created_by', 'updated_by'], 'required'],
            [['gym_owner_id', 'mobile_no', 'pincode', 'city', 'status', 'created_by', 'updated_by'], 'integer'],
            [['address'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['member_name', 'username', 'password', 'state', 'country'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gym_owner_id' => 'Gym Owner ID',
            'member_name' => 'Member Name',
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
}
