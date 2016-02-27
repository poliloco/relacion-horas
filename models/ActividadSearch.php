<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Actividad;

/**
 * ActividadSearch represents the model behind the search form about `app\models\Actividad`.
 */
class ActividadSearch extends Actividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_actividad', 'id_proyecto'], 'integer'],
            [['codigo', 'descripcion', 'producto', 'estatus'], 'safe'],
            [['tarifa', 'esfuerzo', 'total'], 'number'],
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
        $query = Actividad::find();

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
            'id_actividad' => $this->id_actividad,
            'id_proyecto' => $this->id_proyecto,
            'tarifa' => $this->tarifa,
            'esfuerzo' => $this->esfuerzo,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'producto', $this->producto])
            ->andFilterWhere(['like', 'estatus', $this->estatus]);

        return $dataProvider;
    }
}
