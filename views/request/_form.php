<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pay;
use app\models\Type;

/** @var yii\web\View $this */
/** @var app\models\Request $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

    $type = Type::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();

    $pay = Pay::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();

    ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '+7(999)-999-99-99',
]) ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '99/99/9999',
]) ?>

    <?= $form->field($model, 'time')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '99:99',
]) ?>

    <?= $form->field($model, 'id_type')->dropdownList($type) ?>

    <?= $form->field($model, 'another')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pay')->dropdownList($pay) ?>

    <div class="form-group">
        <?= Html::submitButton('Подать заявку', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
