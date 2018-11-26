<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_otp".
 *
 * @property int $id
 * @property string $user_type
 * @property int $uid
 * @property string $otp
 * @property string $created_at
 * @property string $updated_at
 */
class MgpOtp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_otp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_type'], 'string'],
            [['uid'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['otp'], 'string', 'max' => 10],
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
            'otp' => 'Otp',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
