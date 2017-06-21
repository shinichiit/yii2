<?php
namespace frontend\controllers;
use yii\base\Controller;
use yii\filters\AccessControl;
use backend\models\Book;
// use common\models\Slug;
use common\models\Search;

class SearchController extends Controller
{
	public function behaviors()
	{
		return [
				'access' => [
						'class' => AccessControl::className(),
						//'only'=>['index','search'],
						'rules'=>[
								[
										'allow'=>TRUE,
										'actions'=>['index','search'],
										'roles'=>['?','@'],
								]
						]
				]
		];
	}
	public function actionIndex()
	{
		return $this->render('index');
	}
	public function actionSearch()
	{
		$question = \Yii::$app->request->queryParams['search'];
		if (!$question)
		{
			return \Yii::$app->response->redirect('site/index');
		}
		$result = Search::findBySql("SELECT * FROM `book` WHERE `name` LIKE '%".$question."%' OR '`slug`' LIKE '%".$question."%' ")->all();
		if (!$result)
		{
			echo 'Không có dữ liệu';
		}
		else 
		{
			foreach ($result as $key =>$value)
			{
				echo $value['name'];
			}
		}
	}
}