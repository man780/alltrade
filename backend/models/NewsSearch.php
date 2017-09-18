<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\News;

/**
 * NewsSearch represents the model behind the search form about `backend\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'counter', 'count_comment', 'like', 'dislike', 'status', 'dcreated', 'bycreated', 'dmodified', 'bymodified', 'ddeleted', 'bydeleted'], 'integer'],
            [['title', 'descr', 'text', 'img'], 'safe'],
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
        $query = News::find();

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
            'counter' => $this->counter,
            'count_comment' => $this->count_comment,
            'like' => $this->like,
            'dislike' => $this->dislike,
            'status' => $this->status,
            'dcreated' => $this->dcreated,
            'bycreated' => $this->bycreated,
            'dmodified' => $this->dmodified,
            'bymodified' => $this->bymodified,
            'ddeleted' => $this->ddeleted,
            'bydeleted' => $this->bydeleted,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
