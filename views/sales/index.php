<?php 

use yii\helpers\Html;


$this->title = "Sale";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Sales', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Quantity</th>
        <th>Date</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->quantity, ['/sales/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->date ?></td>
    </tr>
    
    <?php endforeach; ?>
</table>
