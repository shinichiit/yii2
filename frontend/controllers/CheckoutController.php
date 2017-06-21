<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;
	use frontend\components\Cart;
	use frontend\models\Checkout;
	// use backend\models\Order;
	// use backend\models\Order_Item;
	// use backend\models\Customer;

	/**
	* 
	*/
	class CheckoutController extends Controller
	{
		
		function actionIndex()
		{
			$model = new Checkout();

			$cart = new Cart();
			$cartstore = $cart->cartstore;
			$cost = $cart->getCost;

			if ($model->load(Yii::$app->request->post())) {
				$cus = $model->customer();
				if ($cus) {
					if($order = $model->order($cus->id)) {
						$model->order_item($order->id);

						return $this->render('index',[
							'message' => "Đặt hàng thành công!",
							'model'=>$model,
							'cartstore'=>$cartstore,
							'cost'=>$cost
							]);
						// return $this->redirect('');
					}
				}
			}
			else{
				return $this->render('index',[
					'message'=>'',
					'model'=>$model,
					'cartstore'=>$cartstore,
					'cost'=>$cost
				]);			# code...
			}			
				// $post = Yii::$app->request->post()['Checkout'];

				// $cus=new Customer;
				// $cus->full_name = $post['full_name'];
				// $cus->email = $post['email'];
				// $cus->phone = $post['phone'];
				// $cus->updated_at = time();
				// $cus->created_at = time();
				// $cus->status = 0;
				// $cus->address = 'address';
				// $cus->username = 'username';
				// $cus->password_hash = 'auth_key';
				// $cus->password_reste_token = 'password_reste_token';
				// $cus->auth_key = 'auth_key';
				

					// $order = new Order;
					// $order->customer_id = $cus->id;
					// $order->oder_note=$post['oder_note'];
					// $order->amount=$post['amount'];
					// $order->shipping_method=$post['shipping_method'];
					// $order->payment_method=$post['payment_method'];
					// $order->created_at=0;
					// $order->updated_at = time();;
					// $order->created_at = time();

					
						
						// foreach($cartstore as $pritem) :

						// 	$orderIt = new Order_Item;
						// 	$orderIt->order_id = $order->id;
						// 	$orderIt->product_id = $pritem->id;
						// 	$orderIt->price = $pritem->price;
						// 	$orderIt->quantity = $pritem->qtt;
						// 	$orderIt->return_status = 0;	
						// 	if ($orderIt->save()) {
						// 		echo 'ok';
						// 	}
						// endforeach;
						
					// }else{
					// 	echo '<pre>';
					// 	print_r($order->getErrors());
					
					// }
					
				// }else{
				// 	echo '<pre>';
				// 	print_r($cus->getErrors());
					
				// }
				
				

			// }


		}
	}
 ?>