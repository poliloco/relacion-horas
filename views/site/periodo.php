<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Periodo */
/* @var $form ActiveForm */
?>
<div class="site-periodo">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fecha_inicio') ?>
        <?= $form->field($model, 'fecha_fin') ?>
        <?= $form->field($model, 'estatus') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-periodo -->
