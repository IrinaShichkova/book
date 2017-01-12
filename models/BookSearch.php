<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

/**
 * BookSearch represents the model behind the search form about `app\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_id', 'fam_id', 'nam_id', 'otc_id', 'str_id', 'n_home'], 'integer'],
            [['corp', 'tel'], 'safe'],
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
        $query = Book::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => false
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'b_id' => $this->b_id,
            'fam_id' => $this->fam_id,
            'nam_id' => $this->nam_id,
            'otc_id' => $this->otc_id,
            'str_id' => $this->str_id,
            'n_home' => $this->n_home,
        ]);

        $query->andFilterWhere(['like', 'corp', $this->corp])
            ->andFilterWhere(['like', 'tel', $this->tel]);

        return $dataProvider;
    }
}
