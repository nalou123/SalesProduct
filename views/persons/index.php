<?php 

use yii\helpers\Html;


$this->title = "Persons";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Persons', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Last Name</th>
        <th>First Name</th>   
        <th>Age</th>
        <th>address</th>
        <th>Phone</th>
        </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->last_name, ['/persons/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->first_name ?></td>
        <td><?= $model->age ?></td>
        <td><?= $model->address ?></td>
        <td><?= $model->phone ?></td>

    </tr>
    <?php endforeach; ?>
</table>
