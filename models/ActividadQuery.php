<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Actividad]].
 *
 * @see Actividad
 */
class ActividadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Actividad[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Actividad|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
