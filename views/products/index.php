<?php 

use yii\helpers\Html;


$this->title = "Products";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Brand Name</th>
        <th>Description</th>  
        <th>Quantity</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->brand_name, ['/products/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->description ?></td>  
        <td><?= $model->quantity ?></td>
    </tr>
    <?php endforeach; ?>
</table>