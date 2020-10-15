<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Home;

/**
 * HomeSearch represents the model behind the search form of `backend\models\Home`.
 */
class HomeSearch extends Home
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['home_id'], 'integer'],
            [['home_icon', 'home_tittle', 'home_content', 'status', 'created_at', 'updated_at', 'created_by'], 'safe'],
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
        $query = Home::find();

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
            'home_id' => $this->home_id,
        ]);

        $query->andFilterWhere(['like', 'home_icon', $this->home_icon])
            ->andFilterWhere(['like', 'home_tittle', $this->home_tittle])
            ->andFilterWhere(['like', 'home_content', $this->home_content])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at])
            ->andFilterWhere(['like', 'created_by', $this->created_by]);

        return $dataProvider;
    }
}
