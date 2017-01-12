<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Street */

$this->title = 'Изменить название улицы: ' . $model->s_val;
$this->params['breadcrumbs'][] = ['label' => 'Улицы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->s_val, 'url' => ['view', 'id' => $model->s_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="street-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
