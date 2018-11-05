<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mgp_countries".
 *
 * @property int $id
 * @property string $country_name
 * @property string $description
 * @property int $status
 */
class MgpCountries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mgp_countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status'], 'required'],
            [['status'], 'integer'],
            [['country_name'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_name' => 'Country Name',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }
}
