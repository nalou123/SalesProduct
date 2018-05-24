<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Persons;
use app\models\Products;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use dosamigos\datepicker\DatePicker;

?>

<div class="sales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'persons_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'products_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <div class="form-group">
    <label for="bdate">Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    </div>
      
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <div class="alert alert-warning">
    <?= $form->errorSummary($model);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>