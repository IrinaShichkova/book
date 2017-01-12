<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fam;

/**
 * FamSearch represents the model behind the search form about `app\models\Fam`.
 */
class FamSearch extends Fam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_id'], 'integer'],
            [['f_val'], 'safe'],
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
        $query = Fam::find();

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
            'f_id' => $this->f_id,
        ]);

        $query->andFilterWhere(['like', 'f_val', $this->f_val]);

        return $dataProvider;
    }
}
