<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Blood;
use app\models\Gender;




/* @var $this yii\web\View */
/* @var $model app\models\Table1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->

     dropDownList(

                     ArrayHelper::map(gender::find()->all(),'id','name')
                 );



     ?>

    <?= $form->field($model, 'blood_id')->

     dropDownList(

                     ArrayHelper::map(blood::find()->all(),'id','name')
                );



     ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_donation_on')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
