<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_admin_packages".
 *
 * @property int $id
 * @property string $name
 * @property int $amount
 * @property int $status
 */
class MgpAdminPackages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_admin_packages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'amount', 'status'], 'required'],
            [['amount', 'status'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'amount' => 'Amount',
            'status' => 'Status',
        ];
    }
}
