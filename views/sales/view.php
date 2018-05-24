<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Sales: $model->quantity";
$this->params['breadcrumbs'][] = ['label'=>'Sales', 'url'=>['/sales/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this sales?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'persons_id',
        'products_id',
        'quantity',
        'date'
    ]
]);