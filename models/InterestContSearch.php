<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InterestCont;

/**
 * InterestContSearch represents the model behind the search form about `app\models\InterestCont`.
 */
class InterestContSearch extends InterestCont
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['interestcont_id'], 'integer'],
            [['interestcont_name', 'interestcont_email', 'add_on'], 'safe'],
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
        $query = InterestCont::find();

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
            'interestcont_id' => $this->interestcont_id,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'interestcont_email', $this->interestcont_email])
            ->andFilterWhere(['like', 'interestcont_name', $this->interestcont_name]);

        return $dataProvider;
    }
}
