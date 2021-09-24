<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form ActiveForm */
?>

<div class="theme-add">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id_book')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Books::find()->where(['checkbook'=>'true'])->all(),'id','name'))->label('Книга') ?>
    <?= $form->field($model, 'id_client')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Clients::find()->all(),'id','name'))->label('Клиент') ?>
    <?= $form->field($model, 'issue')->textInput()->label('Выпуск') ?>
    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary center-block']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>