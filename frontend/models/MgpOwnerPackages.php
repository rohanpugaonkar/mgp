<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_owner_packages".
 *
 * @property int $id
 * @property int $name
 * @property int $cost
 * @property string $cost_period
 * @property int $status
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
            [['name', 'cost', 'status'], 'integer'],
            [['cost_period'], 'string'],
            [['status'], 'required'],
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
            'cost' => 'Cost',
            'cost_period' => 'Cost Period',
            'status' => 'Status',
        ];
    }
}
