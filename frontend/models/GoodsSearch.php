<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Goods;

/**
 * GoodsSearch represents the model behind the search form about `app\models\Goods`.
 */
class GoodsSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_category', 'id_brand', 'id_company', 'id_country', 'id_currency', 'id_states', 'count', 'count_all', 'like', 'dislike', 'rate', 'delivery', 'status'], 'integer'],
            [['name', 'description', 'text', 'color', 'size', 'image', 'gallery'], 'safe'],
            [['old_cost', 'cost'], 'number'],
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
        $query = Goods::find();

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
            'id' => $this->id,
            'id_category' => $params['id_category'],
            'id_brand' => $this->id_brand,
            'id_company' => $this->id_company,
            'id_country' => $this->id_country,
            'id_currency' => $this->id_currency,
            'id_states' => $this->id_states,
            'count' => $this->count,
            'count_all' => $this->count_all,
            'old_cost' => $this->old_cost,
            'cost' => $this->cost,
            'like' => $this->like,
            'dislike' => $this->dislike,
            'rate' => $this->rate,
            'delivery' => $this->delivery,
            'status' => $this->status,
        ]);

        if(!is_null($params['id_categories']) && is_array($params['id_categories'])){
            foreach ($params['id_categories'] as $key => $id_category) {
                $query->orFilterWhere(['id_category' => $id_category]);
            }

        }

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'gallery', $this->gallery]);

        return $dataProvider;
    }
}
