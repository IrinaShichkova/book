<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Otc;

/**
 * OtcSearch represents the model behind the search form about `app\models\Otc`.
 */
class OtcSearch extends Otc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['o_id'], 'integer'],
            [['o_val'], 'safe'],
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
        $query = Otc::find();

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
            'o_id' => $this->o_id,
        ]);

        $query->andFilterWhere(['like', 'o_val', $this->o_val]);

        return $dataProvider;
    }
}
