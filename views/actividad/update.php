<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Actividad */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Actividad',
]) . ' ' . $model->id_actividad;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actividads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_actividad, 'url' => ['view', 'id' => $model->id_actividad]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
