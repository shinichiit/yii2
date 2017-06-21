<?php 
	namespace frontend\controllers;
	use yii\web\Controller;
	use backend\models\Book;
	/**
	* 
	*/
	class BookController extends Controller
	{
		
		function actionIndex()
		{
			# code...
		}
		/**
		* 
		*/
		
			
			function actionView($slug)
			{
				$model=Book::findOne(['slug'=>$slug]);
				return $this->render('view',[
						'model'=>$model,
					]);
			}
		
	}
 ?>
