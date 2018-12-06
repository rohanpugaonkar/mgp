<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_address_details".
 *
 * @property int $id
 * @property string $user_type 'O'=>Owner,'M'=>Member
 * @property int $uid
 * @property string $address
 * @property string $city
 * @property string $district
 * @property string $state
 * @property string $country
 * @property int $status
 * @property string $created_at
 */
class MgpAddressDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_address_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_type', 'uid', 'address', 'city', 'district', 'state', 'country', 'status', 'created_at'], 'required'],
            [['uid', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['user_type'], 'string', 'max' => 1],
            [['address'], 'string', 'max' => 200],
            [['city', 'district', 'state', 'country'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_type' => 'User Type',
            'uid' => 'Uid',
            'address' => 'Address',
            'city' => 'City',
            'district' => 'District',
            'state' => 'State',
            'country' => 'Country',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
