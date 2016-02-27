<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Actividad */
/* @var $form ActiveForm */
?>
<div class="site-actividad">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_proyecto') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'tarifa') ?>
        <?= $form->field($model, 'esfuerzo') ?>
        <?= $form->field($model, 'total') ?>
        <?= $form->field($model, 'codigo') ?>
        <?= $form->field($model, 'estatus') ?>
        <?= $form->field($model, 'producto') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-actividad -->
