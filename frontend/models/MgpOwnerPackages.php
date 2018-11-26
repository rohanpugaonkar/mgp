<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_owner_packages".
 *
 * @property int $id
 * @property int $package_type_id
 * @property int $uid
 * @property int $duration
 * @property double $amount
 * @property string $specifications
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class MgpOwnerPackages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_owner_packages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_type_id', 'uid', 'duration', 'status', 'created_by', 'updated_by'], 'integer'],
            [['amount'], 'number'],
            [['specifications'], 'string'],
            [['status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_type_id' => 'Package Type ID',
            'uid' => 'Uid',
            'duration' => 'Duration',
            'amount' => 'Amount',
            'specifications' => 'Specifications',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
