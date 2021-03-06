<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = 'Изменить запись: ' . $model->fam->f_val.'  '. $model->tel;
$this->params['breadcrumbs'][] = ['label' => 'Телефонный справочник', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fam->f_val.'  '. $model->tel, 'url' => ['view', 'id' => $model->b_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
