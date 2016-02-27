<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proyecto */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Proyecto',
]) . ' ' . $model->id_proyecto;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Proyectos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_proyecto, 'url' => ['view', 'id' => $model->id_proyecto]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="proyecto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
