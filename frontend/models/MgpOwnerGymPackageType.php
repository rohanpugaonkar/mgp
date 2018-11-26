<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_owner_gym_package_type".
 *
 * @property int $id
 * @property string $package_name
 * @property int $status
 */
class MgpOwnerGymPackageType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_owner_gym_package_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_name', 'status'], 'required'],
            [['status'], 'integer'],
            [['package_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_name' => 'Package Name',
            'status' => 'Status',
        ];
    }
}
