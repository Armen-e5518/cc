<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Participation;

/**
 * ParticipationSearch represents the model behind the search form of `common\models\Participation`.
 */
class ParticipationSearch extends Participation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'uniteBase', 'flash', 'numParty', 'status', 'dateSession', 'session', 'amount', 'party'], 'integer'],
            [['grille', 'idRemote', 'date', 'numCollector', 'state', 'idHost', 'nature'], 'safe'],
            [['coeff'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Participation::find();

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
            'coeff' => $this->coeff,
            'uniteBase' => $this->uniteBase,
            'flash' => $this->flash,
            'numParty' => $this->numParty,
            'date' => $this->date,
            'status' => $this->status,
            'dateSession' => $this->dateSession,
            'session' => $this->session,
            'amount' => $this->amount,
            'party' => $this->party,
        ]);

        $query->andFilterWhere(['like', 'grille', $this->grille])
            ->andFilterWhere(['like', 'idRemote', $this->idRemote])
            ->andFilterWhere(['like', 'numCollector', $this->numCollector])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'idHost', $this->idHost])
            ->andFilterWhere(['like', 'nature', $this->nature]);

        return $dataProvider;
    }
}
