<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;

/** @var yii\web\View $this */
/** @var app\models\Request $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

    $status = Status::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
    ?>

<?= $form->field($model, 'id_status')->dropDownList($status, ['id' => 'status']) ?>
<?= $form->field($model, 'cancel_reason', ['options' => ['id' => 'reason', 'style' => 'display:none']])->textInput() ?>

<?php
$this->registerJs("
    $('#status').on('change', function() {
        $('#reason').toggle($(this).val() == '3');
    }).trigger('change');
");
?>



    <div class="form-group">
        <?= Html::submitButton('Обновить статус', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
