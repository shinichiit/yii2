<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use frontend\models\Sendmail;

?>
<?php $form = ActiveForm::begin()?>
<?= $form->field($model, 'form_input')->textInput()?>
<div class="form-group">
        <?= Html::submitButton('Send mail', ['class' => 'btn btn-primary'])?>
    </div>
<?php $form->end()?>