<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tuman;

/**
 * TumanSearch represents the model behind the search form about `backend\models\Tuman`.
 */
class TumanSearch extends Tuman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tuman', 'id_vil', 'kod'], 'integer'],
            [['name', 'tel', 'addr'], 'safe'],
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
        $query = Tuman::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_tuman' => $this->id_tuman,
            'id_vil' => $this->id_vil,
            'kod' => $this->kod,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'addr', $this->addr]);

        return $dataProvider;
    }
}
