<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fam */

$this->title = 'Добавить фамилию';
$this->params['breadcrumbs'][] = ['label' => 'Фамилии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
