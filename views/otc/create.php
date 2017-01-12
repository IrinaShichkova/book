<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Otc */

$this->title = 'Добавить отчество';
$this->params['breadcrumbs'][] = ['label' => 'Отчества', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
