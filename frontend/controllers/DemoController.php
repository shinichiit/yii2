<?php 
	namespace frontend\controllers;

	use yii\web\Controller;

	class DemoController extends Controller
	{
		
		public function actionIndex()
		{
			// echo "wellcome to yii";
			return $this->render('index');
		}

		public function actionTinTuc()
		{
			return $this->render('tin-tuc');
		}
	}
?>