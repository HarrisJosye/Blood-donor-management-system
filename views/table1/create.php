<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Table1 */

$this->title = 'Create Table1';
$this->params['breadcrumbs'][] = ['label' => 'Table1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
