<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\GoodsFieldsValues;

/**
 * GoodsFieldsValuesSearch represents the model behind the search form about `backend\models\GoodsFieldsValues`.
 */
class GoodsFieldsValuesSearch extends GoodsFieldsValues
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_goods_field', 'id_good', 'id_ad'], 'integer'],
            [['value'], 'safe'],
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
        $query = GoodsFieldsValues::find();

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
            'id_goods_field' => $this->id_goods_field,
            'id_good' => $this->id_good,
            'id_ad' => $this->id_ad,
        ]);

        $query->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
