<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MgpPayments;

/**
 * MgpPaymentsSearch represents the model behind the search form of `frontend\models\MgpPayments`.
 */
class MgpPaymentsSearch extends MgpPayments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_type', 'uid', 'package_id', 'payment_method_id', 'status'], 'integer'],
            [['reference_no', 'payment_from_date', 'payment_to_date', 'insert_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MgpPayments::find()->where(['status'=>0]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_type' => $this->user_type,
            'uid' => $this->uid,
            'package_id' => $this->package_id,
            'payment_method_id' => $this->payment_method_id,
            'payment_from_date' => $this->payment_from_date,
            'payment_to_date' => $this->payment_to_date,
            'status' => $this->status,
            'insert_time' => $this->insert_time,
        ]);

        $query->andFilterWhere(['like', 'reference_no', $this->reference_no]);

        return $dataProvider;
    }
}
