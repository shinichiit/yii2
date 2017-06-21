<?php 
$this->title = 'Thong tin dat hang';
use yii\widgets\ActiveForm;
$model->amount=$cost;
use yii\helpers\Html;
 ?>


 <div class="container">
 	<?php if($cartstore) : $n = 1;?>
 	<?php $form = ActiveForm::begin(); ?>
 	<div class="col-md-5">
 		<h1>Thong tin khach hang</h1>
 		<?php echo $form->field($model,'full_name')->textInput(['placeholder'=>'Ho va ten..']); ?>
 		<?php echo $form->field($model,'email')->textInput(['placeholder'=>'Email..']); ?>
 		<?php echo $form->field($model,'phone')->textInput(['placeholder'=>'Phone..']); ?>
 		<?php echo $form->field($model,'address')->textInput(['placeholder'=>'address..']); ?>
 		<?php echo $form->field($model,'shipping_method')->textInput(['placeholder'=>'shipping_method..']); ?>
 		<?php echo $form->field($model,'payment_method')->textInput(['placeholder'=>'payment_method..']); ?>
 		<?php echo $form->field($model,'oder_note')->textArea(['placeholder'=>'oder_note..']); ?>
 		<?php echo $form->field($model,'amount')->textInput(); ?>

 		<input type="hidden" name="amount" value="<?php echo $cost; ?>">

 	</div>
 	<div class="col-md-7">
 		<h3>Thong tin san pham</h3>
 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th>STT </th>
 					<th>Name</th>
 					<th>Quantity</th>
 					<th>Price</th>
 					<th>Total</th>

 				</tr>
 			</thead>
 			<tbody>
 			<?php foreach($cartstore as $item) : ?>
 				<tr>
 					<td><?php echo $n; ?></td>
 					<td><?php echo $item->name; ?></td>
 					<td><?php echo $item->qtt; ?></td>
 					<td><?php echo number_format($item->price,0,'',','); ?></td>
 					<td><?php echo number_format($item->price*$item->qtt,0,'',','); ?></td>
 				
 				</tr>
 				<?php $n++; endforeach; ?>
 				<tr>
 					<td colspan="5" align="right">Tong tien</td>
 					<td ><?php echo number_format($cost,0,'',','); ?>VND</td>
 				</tr>
 				<tr>
 				<td colspan="5" align="right">Ngay dat</td>
 					<td ><?php echo date('d-m-Y'); ?></td>
 				</tr>
 			</tbody>
 		</table>
 		<button type="submit" class="btn btn-primary pull-right">Dat hang</button>
 	</div>
 	<?php echo $message; ?>
 	<?php ActiveForm::end(); ?>
	<?php else: ?>
	 <div class="alert alert-warning">
	 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	 	<strong>thong bao</strong> gio hang trong ...
 		<?php echo Html::a('tiep tuc mua hang',['/site'],['class'=>'btn btn-success']); ?>
	 </div>
<?php endif; ?>
 </div>