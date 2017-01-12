<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Fam;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?//= $form->field($model, 'b_id') ?>

    <?//= $form->field($model, 'fam_id') ?>

    <?//= $form->field($model, 'nam_id') ?>

    <?//= $form->field($model, 'otc_id') ?>

    <?//= $form->field($model, 'str_id') ?>

    <?//php echo $form->field($model, 'n_home') ?>

    <?//php echo $form->field($model, 'corp') ?>

    <?//php echo $form->field($model, 'tel') ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'fam_id')->dropDownList([''=>'']+ArrayHelper::map(Fam::find()->orderBy('f_val')->all(), 'f_id', 'f_val'))  ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
            <label class="control-label">&nbsp;</label>
                <?= Html::a('...', '/fam', ['class' => 'btn btn-default form-control', 'target' => '_blank']) ?>
            </div>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'nam_id') ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
                <label class="control-label">&nbsp;</label>
                <button type="submit" class="btn btn-default form-control">...</button>
            </div>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'otc_id') ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
                <label class="control-label">&nbsp;</label>
                <button type="submit" class="btn btn-default form-control">...</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'str_id') ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
                <label class="control-label">&nbsp;</label>
                <button type="submit" class="btn btn-default form-control" href="/street">...</button>
            </div>
        </div>
        <div class="col-md-3 ">
            <?php echo $form->field($model, 'n_home') ?>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <?php echo $form->field($model, 'corp') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php echo $form->field($model, 'tel') ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Очистить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
