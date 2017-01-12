<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фамилии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавать фамилию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'f_id',
            'f_val',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
