<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form ActiveForm */
?>

<div class="theme-add">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id_book')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Books::find()->where(['checkbook'=>'false'])->all(),'id','name'))->label('Книга') ?>
    <?= $form->field($model, 'condition')->dropDownList(['0'=>'Новая','1'=>'Потрепанная','2'=>'Испорченная'])->label('Состояние') ?>
    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary center-block']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>