<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%proyecto}}".
 *
 * @property string $id_proyecto
 * @property string $id_cliente
 * @property string $numero
 * @property string $nombre
 * @property string $estatus
 *
 * @property Actividad[] $actividads
 * @property Cliente $idCliente
 */
class Proyecto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%proyecto}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cliente', 'numero', 'nombre'], 'required'],
            [['id_cliente'], 'integer'],
            [['numero', 'estatus'], 'string', 'max' => 10],
            [['nombre'], 'string', 'max' => 100],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['id_cliente' => 'id_cliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proyecto' => Yii::t('app', 'Id Proyecto'),
            'id_cliente' => Yii::t('app', 'Id Cliente'),
            'numero' => Yii::t('app', 'Numero'),
            'nombre' => Yii::t('app', 'Nombre'),
            'estatus' => Yii::t('app', 'Estatus'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividads()
    {
        return $this->hasMany(Actividad::className(), ['id_proyecto' => 'id_proyecto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente()
    {
        return $this->hasOne(Cliente::className(), ['id_cliente' => 'id_cliente']);
    }

    /**
     * @inheritdoc
     * @return ProyectoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProyectoQuery(get_called_class());
    }
}
