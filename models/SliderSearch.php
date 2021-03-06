<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Slider;

/**
 * SliderSearch represents the model behind the search form about `app\models\Slider`.
 */
class SliderSearch extends Slider
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slider_id'], 'integer'],
            [['filename', 'title', 'created_date'], 'safe'],
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
        $query = Slider::find();

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
            'slider_id' => $this->slider_id,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'filename', $this->filename])
            ->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
