<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proyecto */
/* @var $form ActiveForm */
?>
<div class="site-proyecto">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_cliente') ?>
        <?= $form->field($model, 'numero') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'estatus') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-proyecto -->
