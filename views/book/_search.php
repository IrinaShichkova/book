<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Fam;
use app\models\Name;
use app\models\Otc;
use app\models\Street;
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
            <?= $form->field($model, 'f_val')->dropDownList([''=>'']+ArrayHelper::map(Fam::find()->orderBy('f_val')->all(), 'f_val', 'f_val'))->label('Фамилия') ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
            <label class="control-label">&nbsp;</label>
                <?= Html::a('...', '/fam', ['class' => 'btn btn-default form-control', 'target' => '_blank']) ?>
            </div>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'n_val')->dropDownList([''=>'']+ArrayHelper::map(Name::find()->orderBy('n_val')->all(), 'n_val', 'n_val'))->label('Имя') ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
                <label class="control-label">&nbsp;</label>
                <?= Html::a('...', '/name', ['class' => 'btn btn-default form-control', 'target' => '_blank']) ?>
            </div>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'o_val')->dropDownList([''=>'']+ArrayHelper::map(Otc::find()->orderBy('o_val')->all(), 'o_val', 'o_val'))->label('Отчество') ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
                <label class="control-label">&nbsp;</label>
                    <?= Html::a('...', '/otc', ['class' => 'btn btn-default form-control', 'target' => '_blank']) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 's_val')->dropDownList([''=>'']+ArrayHelper::map(Street::find()->orderBy('s_val')->all(), 's_val', 's_val'))->label('Улица') ?>
        </div>
        <div class="col-md-1">
            <div class="form-group pull-left">
                <label class="control-label">&nbsp;</label>
                    <?= Html::a('...', '/street', ['class' => 'btn btn-default form-control', 'target' => '_blank']) ?>
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
