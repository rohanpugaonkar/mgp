<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_payments".
 *
 * @property int $id
 * @property int $user_type 1=owner,0=member
 * @property int $uid
 * @property int $package_id
 * @property int $payment_method_id
 * @property string $reference_no
 * @property string $payment_from_date
 * @property string $payment_to_date
 * @property int $status
 * @property string $insert_time
 */
class MgpPayments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_type', 'uid', 'package_id', 'payment_method_id', 'insert_time'], 'required'],
            [['user_type', 'uid', 'package_id', 'payment_method_id', 'status'], 'integer'],
            [['payment_from_date', 'payment_to_date', 'insert_time'], 'safe'],
            [['reference_no'], 'string', 'max' => 256],
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
            'package_id' => 'Package ID',
            'payment_method_id' => 'Payment Method ID',
            'reference_no' => 'Reference No',
            'payment_from_date' => 'Payment From Date',
            'payment_to_date' => 'Payment To Date',
            'status' => 'Status',
            'insert_time' => 'Insert Time',
        ];
    }
}
