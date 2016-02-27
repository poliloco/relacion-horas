<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form ActiveForm */
?>
<div class="site-cliente">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'rif') ?>
        <?= $form->field($model, 'razon_zocial') ?>
        <?= $form->field($model, 'estatus') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-cliente -->
