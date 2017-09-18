<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ads;

/**
 * AdsSearch represents the model behind the search form about `frontend\models\Ads`.
 */
class AdsSearch extends Ads
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_category', 'id_currency', 'id_states', 'count', 'like', 'dislike', 'rate', 'delivery', 'status'], 'integer'],
            [['name', 'description', 'text', 'image'], 'safe'],
            [['cost'], 'number'],
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
        $query = Ads::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8,
            ],
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
            'id_category' => $params['id_category'],
            'id_currency' => $this->id_currency,
            'id_states' => $this->id_states,
            'count' => $this->count,
            'cost' => $this->cost,
            'like' => $this->like,
            'dislike' => $this->dislike,
            'rate' => $this->rate,
            'delivery' => $this->delivery,
            'status' => 1,
            'dcreated' => $this->dcreated,
            'bycreated' => $this->bycreated,
            'dmodified' => $this->dmodified,
            'bymodified' => $this->bymodified,
            'ddeleted' => $this->ddeleted,
            'bydeleted' => $this->bydeleted,
        ]);


        if(!is_null($params['id_categories']) && is_array($params['id_categories'])){
            foreach ($params['id_categories'] as $key => $id_category) {
                $query->orFilterWhere(['id_category' => $id_category]);
            }
            
        }
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
