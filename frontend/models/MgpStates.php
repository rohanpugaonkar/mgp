<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_states".
 *
 * @property int $id
 * @property string $state_name
 * @property int $country_id
 * @property string $description
 * @property int $status
 */
class MgpStates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_states';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id', 'status'], 'integer'],
            [['description'], 'string'],
            [['state_name'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_name' => 'State Name',
            'country_id' => 'Country ID',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }
}
