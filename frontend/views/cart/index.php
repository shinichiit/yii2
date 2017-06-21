
<?php 
	$this->title='Shopping cart';

	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;

 ?>
 
 <div class="container">
 <?php if($cartstore) : $n = 1;?>
 	<table class="table table-hover">
 		<thead>
 			<tr>
 				<th>STT </th>
 				<th>Name</th>
 				<th>Quantity</th>
 				<th>Price</th>
 				<th>Total</th>
 				<th>Action</th>
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
 				<td>
					<?php $form = ActiveForm::begin(
						[
						'action'=>Url::to(['/cart/update-cart']),
							'options'=>[
								'class'=>'form-inline pull-left',
							]
						]
					); ?>
						<input type="hidden" name="id" value="<?php echo $item->id; ?>"  />
						<input type="text" name="qtt" value="<?php echo $item->qtt; ?>" size="4" class="form-control" />
						<input type="submit" name="update" value="Update" class="btn btn-sm btn-success">
					<?php ActiveForm::end(); ?>
 					<?php echo Html::a('Delete',['/cart/remove','slug'=>$item->slug],['class'=>'btn btn-sm btn-danger']); ?>
 				</td>
 			</tr>
 			<?php $n++; endforeach; ?>
 			<tr>
				<td colspan="5" align="right">Tong tien</td>
				<td ><?php echo number_format($cost,0,'',','); ?>VND</td>
 			</tr>
 		</tbody>
 	</table>
 	<div class="action clearfix">
 		<?php echo Html::a('tiep tuc mua hang',['/site'],['class'=>'btn btn-success']); ?>
 		<?php echo Html::a('xoa gio hang',['/cart/clear'],['class'=>'btn btn-danger']); ?>
 		<?php echo Html::a('dat hang',['/checkout/index'],['class'=>'btn btn-primary']); ?>
 	</div>
 <?php else: ?>
 	<div class="alert">
 		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 		<strong>thong bao</strong> gio hang trong ...
 		<?php echo Html::a('tiep tuc mua hang',['/site'],['class'=>'btn btn-success']); ?>
 	</div>
 <?php endif; ?>
 </div>