<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
         'enableAjaxValidation' => true
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password2')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '+7(999)-999-99-99',
]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
