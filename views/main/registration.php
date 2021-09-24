<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */
/* @var $form ActiveForm */
/* @var $model app\models\RegistrationForm */
?>
<div class="home-registration">

    <div class="row">
        <div class="col-md-12">
            <div class="h2 text-center">Регистрация</div>
        </div>
    </div>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>
    <?= $form->field($model, 'surname')->textInput()->label('Фамилия') ?>
    <?= $form->field($model, 'patronymic')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
    <div class="form-group">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary center-block']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>