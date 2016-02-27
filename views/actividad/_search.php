<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActividadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actividad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_actividad') ?>

    <?= $form->field($model, 'id_proyecto') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'tarifa') ?>

    <?php // echo $form->field($model, 'esfuerzo') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'producto') ?>

    <?php // echo $form->field($model, 'estatus') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
