<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%actividad}}".
 *
 * @property string $id_actividad
 * @property string $id_proyecto
 * @property string $codigo
 * @property string $descripcion
 * @property string $tarifa
 * @property string $esfuerzo
 * @property string $total
 * @property string $producto
 * @property string $estatus
 *
 * @property Proyecto $idProyecto
 * @property Actividades[] $actividades
 */
class Actividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%actividad}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_proyecto', 'descripcion'], 'required'],
            [['id_proyecto'], 'integer'],
            [['tarifa', 'esfuerzo', 'total'], 'number'],
            [['codigo', 'estatus'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 250],
            [['producto'], 'string', 'max' => 100],
            [['id_proyecto'], 'exist', 'skipOnError' => true, 'targetClass' => Proyecto::className(), 'targetAttribute' => ['id_proyecto' => 'id_proyecto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_actividad' => Yii::t('app', 'Id Actividad'),
            'id_proyecto' => Yii::t('app', 'Id Proyecto'),
            'codigo' => Yii::t('app', 'Codigo'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'tarifa' => Yii::t('app', 'Tarifa'),
            'esfuerzo' => Yii::t('app', 'Esfuerzo'),
            'total' => Yii::t('app', 'Total'),
            'producto' => Yii::t('app', 'Producto'),
            'estatus' => Yii::t('app', 'Estatus'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProyecto()
    {
        return $this->hasOne(Proyecto::className(), ['id_proyecto' => 'id_proyecto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividades()
    {
        return $this->hasMany(Actividades::className(), ['id_actividad' => 'id_actividad']);
    }

    /**
     * @inheritdoc
     * @return ActividadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActividadQuery(get_called_class());
    }
}
