<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form ActiveForm */
?>

<div class="theme-add">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>
    <?= $form->field($model, 'surname')->textInput()->label('Фамилия') ?>
    <?= $form->field($model, 'patronymic')->textInput()->label('Отчество') ?>
    <?= $form->field($model, 'pasport')->textInput()->label('Паспортные данные')?>
    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary center-block']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>