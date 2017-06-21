<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\components\Cart;
use backend\models\Book;

/**
* 
*/
class CartController extends Controller
{
	
	function actionIndex()
	{
		$cart = new Cart();
		$cartstore=$cart->cartstore;
		$cost=$cart->getCost;
		return $this->render('index',[
			'cartstore'=>$cartstore,
			'cost'=>$cost
			]);
	}

	public function actionAddCart($slug){
		$cart = new Cart();
		$model = Book::findOne(['slug'=>$slug]);

		$cart->add($model);
		echo 'ok';
		// return $this->redirect(['/cart']);
		// var_dump($cart->cartstore);
	}
	public function actionRemove($slug){
		$cart = new Cart();
		$model = Book::findOne(['slug'=>$slug]);

		$cart->remove($model);
		return $this->redirect(['/cart']);
	}

	public function actionUpdateCart(){
		$cart = new Cart();
		if(Yii::$app->request->post()){
			$id=$_POST['id'];
		$qtt=$_POST['qtt'];
		$cart->update($id,$qtt);
		}
		
		return $this->redirect(['/cart']);
}

	public function actionClear(){
		$cart=new Cart();
		$cart->removeall();
		return $this->redirect(['/cart']);
	}
}

 ?>