<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Name */

$this->title = 'Изменить имя: ' . $model->n_val;
$this->params['breadcrumbs'][] = ['label' => 'Имена', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->n_val, 'url' => ['view', 'id' => $model->n_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
