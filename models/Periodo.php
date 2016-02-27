<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%periodo}}".
 *
 * @property string $id_periodo
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $estatus
 *
 * @property Actividades[] $actividades
 */
class Periodo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%periodo}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_inicio', 'fecha_fin'], 'required'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['estatus'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_periodo' => Yii::t('app', 'Id Periodo'),
            'fecha_inicio' => Yii::t('app', 'Fecha Inicio'),
            'fecha_fin' => Yii::t('app', 'Fecha Fin'),
            'estatus' => Yii::t('app', 'Estatus'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividades()
    {
        return $this->hasMany(Actividades::className(), ['id_periodo' => 'id_periodo']);
    }

    /**
     * @inheritdoc
     * @return PeriodoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PeriodoQuery(get_called_class());
    }
}
