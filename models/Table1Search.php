<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Table1;

/**
 * Table1Search represents the model behind the search form about `app\models\Table1`.
 */
class Table1Search extends Table1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'place', 'mobile', 'last_donation_on'], 'safe'],
            [['age', 'gender', 'blood_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Table1::find();

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
            'age' => $this->age,
            'gender' => $this->gender,
            'blood_id' => $this->blood_id,
            'last_donation_on' => $this->last_donation_on,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'mobile', $this->mobile]);

        return $dataProvider;
    }
}
