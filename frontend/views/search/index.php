<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<?php $form = ActiveForm::begin([
		'action'  => ['search'],
		'method'  => 'get',
		'options' => ['class' => 'form-inline'],
]);?>
<div class="container">
 
  <label class="control-label" for="search">Search: </label>
 
 
  <input id="search" name="search" placeholder="Search Here" class="form-control input-md" required value="" type="text">
 
</div>
 
      <div class="container">
        <?=Html::submitButton('Search', ['class' => 'btn btn-primary'])?>
 
    </div>
<?php ActiveForm::end();?>
