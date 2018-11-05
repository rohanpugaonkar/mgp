<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_otp".
 *
 * @property int $id
 * @property string $user_type
 * @property int $uid
 * @property int $otp
 * @property string $created-at
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
            // [['id'], 'required'],
            [['uid', 'otp'], 'integer'],
            [['user_type'], 'string'],
            [['created-at', 'updated_at'], 'safe'],
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
            'created-at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
