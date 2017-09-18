<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Comments;

/**
 * CommentsSearch represents the model behind the search form about `backend\models\Comments`.
 */
class CommentsSearch extends Comments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'status', 'like', 'dislike', 'id_table', 'table_name', 'dcreated', 'bycreated', 'dmodified', 'bymodified', 'ddeleted', 'bydeleted'], 'integer'],
            [['title', 'text', 'file'], 'safe'],
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
        $query = Comments::find();

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
            'id_user' => $this->id_user,
            'status' => $this->status,
            'like' => $this->like,
            'dislike' => $this->dislike,
            'id_table' => $this->id_table,
            'table_name' => $this->table_name,
            'dcreated' => $this->dcreated,
            'bycreated' => $this->bycreated,
            'dmodified' => $this->dmodified,
            'bymodified' => $this->bymodified,
            'ddeleted' => $this->ddeleted,
            'bydeleted' => $this->bydeleted,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }
}
