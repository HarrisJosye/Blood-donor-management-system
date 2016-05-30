<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Table1 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Table1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <a class="btn btn-warning" href="http://localhost/basic1/web/index.php?r=site%2Findex">SAVE</a>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'age',
            'gender.name',
            'blood.name',
            'place',
            'mobile',
            'last_donation_on',
        ],
    ]) ?>

</div>
