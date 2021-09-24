<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="login">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'email')->textInput()->label('email')?>

    <?= $form->field($model, 'password')->passwordInput()->label('Пароль')?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}Запомнить меня</div>\n<div class=\"col-lg-8\">{error}</div>",
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Авторизироваться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>