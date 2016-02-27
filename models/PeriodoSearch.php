<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Periodo;

/**
 * PeriodoSearch represents the model behind the search form about `app\models\Periodo`.
 */
class PeriodoSearch extends Periodo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_periodo'], 'integer'],
            [['fecha_inicio', 'fecha_fin', 'estatus'], 'safe'],
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
        $query = Periodo::find();

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
            'id_periodo' => $this->id_periodo,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
        ]);

        $query->andFilterWhere(['like', 'estatus', $this->estatus]);

        return $dataProvider;
    }
}
