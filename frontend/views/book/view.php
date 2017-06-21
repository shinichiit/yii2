<?php 
	$this->title=($model) ? $model->name:'not found';
 ?>

 <div class='view-book'>
	<?php if($model) : ?>
	<div class="col-md-4">
		<img src="<?php echo $model->image; ?>" class="img-responsive" alt="<?php echo $model->name ?>">
	</div> 	
	<div class="col-md-8">
		<h1 class="book-title"><?php echo $model->name; ?></h1>
		<?php echo $model->content; ?>
		<p>
			<a href="#" title="them vao gio hang" class="btn btn-success">them vao gio</a>
		</p>
	</div>
<?php else: ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hiden="true">&times;</button>
		<strong>Error 404 !</strong>khong co thong tin sach...
	</div>
<?php endif; ?>
 </div>