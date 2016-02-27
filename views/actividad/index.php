<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActividadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Actividads');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actividad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Actividad'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_actividad',
            'id_proyecto',
            'codigo',
            'descripcion',
            'tarifa',
            // 'esfuerzo',
            // 'total',
            // 'producto',
            // 'estatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
