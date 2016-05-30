<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Table1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'blood_id') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'mobile') ?>

    <?= $form->field($model, 'last_donation_on') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
