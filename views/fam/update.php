<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fam */

$this->title = 'Изменить фамилию: ' . $model->f_val;
$this->params['breadcrumbs'][] = ['label' => 'Фамилии', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->f_val, 'url' => ['view', 'id' => $model->f_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="fam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
