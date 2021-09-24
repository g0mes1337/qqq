<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookAddForm */
/* @var $form ActiveForm */
?>
<div class="addbook">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->label('Название') ?>
        <?= $form->field($model, 'article')->label('Артикль') ?>
        <?= $form->field($model, 'author')->label('Автор') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addbook -->
