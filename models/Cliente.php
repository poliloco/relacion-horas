<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%cliente}}".
 *
 * @property string $id_cliente
 * @property string $rif
 * @property string $razon_zocial
 * @property string $estatus
 *
 * @property Proyecto[] $proyectos
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cliente}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rif', 'razon_zocial'], 'required'],
            [['rif'], 'string', 'max' => 15],
            [['razon_zocial'], 'string', 'max' => 50],
            [['estatus'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => Yii::t('app', 'Id Cliente'),
            'rif' => Yii::t('app', 'Rif'),
            'razon_zocial' => Yii::t('app', 'Razon Zocial'),
            'estatus' => Yii::t('app', 'Estatus'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos()
    {
        return $this->hasMany(Proyecto::className(), ['id_cliente' => 'id_cliente']);
    }

    /**
     * @inheritdoc
     * @return ClienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClienteQuery(get_called_class());
    }
}
