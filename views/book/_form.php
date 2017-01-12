<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Fam;
use app\models\Name;
use app\models\Otc;
use app\models\Street;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fam_id')->dropDownList([''=>'']+ArrayHelper::map(Fam::find()->orderBy('f_val')->all(), 'f_id', 'f_val')) ?>

    <?= $form->field($model, 'nam_id')->dropDownList([''=>'']+ArrayHelper::map(Name::find()->orderBy('n_val')->all(), 'n_id', 'n_val')) ?>

    <?= $form->field($model, 'otc_id')->dropDownList([''=>'']+ArrayHelper::map(Otc::find()->orderBy('o_val')->all(), 'o_id', 'o_val')) ?>

    <?= $form->field($model, 'str_id')->dropDownList([''=>'']+ArrayHelper::map(Street::find()->orderBy('s_val')->all(), 's_id', 's_val')) ?>

    <?= $form->field($model, 'n_home')->textInput() ?>

    <?= $form->field($model, 'corp')->textInput() ?>

    <?= $form->field($model, 'tel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Удалить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
