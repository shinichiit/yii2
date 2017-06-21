<?php
	$this->title='quan li anh';

	$baseUrl = str_replace('/backend/web', '', Yii::$app->urlManager->baseUrl);
	echo $baseUrl;
?>
<div class="file-index">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $this->title; ?></h3>
		</div>
		<div class="panel-body">
			<iframe src="<?php echo $baseUrl; ?>/file/dialog.php" style="width: 100%; height: 500px"></iframe>
		</div>
	</div>

</div>