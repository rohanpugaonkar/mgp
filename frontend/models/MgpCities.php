<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_cities".
 *
 * @property int $city_id
 * @property string $city_name
 * @property string $state_id
 * @property int $status
 */
class MgpCities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['city_name', 'state_id'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city_name' => 'City Name',
            'state_id' => 'State ID',
            'status' => 'Status',
        ];
    }
}
