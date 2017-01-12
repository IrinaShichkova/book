<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Otc */

$this->title = 'Изменить отчество: ' . $model->o_val;
$this->params['breadcrumbs'][] = ['label' => 'Отчества', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->o_val, 'url' => ['view', 'id' => $model->o_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="otc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
