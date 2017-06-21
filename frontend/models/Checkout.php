<?php 
	namespace frontend\models;
	use Yii;
	use yii\base\Model;
	use frontend\components\Cart;
	use backend\models\Order;
	use backend\models\Order_Item;
	use backend\models\Customer;

	/**
	* 
	*/
	class Checkout extends Model
	{
		public $full_name;
		public $email;
		public $address;
		public $phone;
		public $oder_note;
		public $shipping_method;
		public $payment_method;
		public $amount;

		public function rules()
		{
			return [
				[['full_name','email','phone'],'required','message'=>'(attribute) khong duoc de trong'],
				[['full_name','email','oder_note','shipping_method','payment_method','address'],'string'],
				[['phone','amount'],'integer'],
				['email','email'],
			];
		}

		public function attributeLabels()
		{
			return [

				'full_name'=>'Ho va ten',
				'email'=>'Dia chi email',
				'phone'=>'So dien thoai',
				'address'=>'Dia chi',
				'oder_note'=>'Ghi chu don hang',
				'shipping_method'=>'Phuong thuc giao hang',
				'payment_method'=>'Phuong thuc thanh toan',
			];
		}

		public function customer()
		{
			if (!$this->validate()) {
				return null;
			}
			$cus = new Customer;

			 //var_dump($this->$customer_id);die;
			$cus->full_name = $this->full_name;
			$cus->email = $this->email;
			$cus->phone = $this->phone;
			$cus->created_at = time();
			$cus->updated_at = time();
			$cus->status = 0;
			$cus->address = $this->address;
			$cus->username = $this->converttext($this->full_name);
			$cus->auth_key = 'asasas';
			$cus->password_hash ='wewewe';

			return $cus->save() ? $cus : null;
		}

		public function converttext($str)
		{
			// In thường
			$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
			$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
			$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
			$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
			$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
			$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
			$str = preg_replace("/(đ)/", 'd', $str);    
			// In đậm
			$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
			$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
			$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
			$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
			$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
			$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
			$str = preg_replace("/(Đ)/", 'D', $str);

			return $str; // Trả về chuỗi đã chuyển
		}

		public function order($customer_id)
		{
			if (!$this->validate()) {
				return null;
			}
			$order = new Order;
			 //var_dump($this->amount);die;
			$order->customer_id = $customer_id;
			$order->oder_note = $this->oder_note;
			$order->amount = $this->amount;
			$order->shipping_method = $this->shipping_method;
			$order->payment_method = $this->payment_method;
			$order->created_at = time();
			$order->updated_at = time();
		
			return $order->save() ? $order : null;
		}

		public function order_item($order_id)
		{
			$flag = false;

			$cart = new Cart();
			$cartstore = $cart->cartstore;
			$cost = $cart->getCost;

			if (!$this->validate()) {
				return null;
			}
			foreach($cartstore as $item) :
							
			$orderIt = new Order_Item;
			$orderIt->order_id = $order_id;
			$orderIt->product_id = $item->id;
			$orderIt->price = $item->price;
			$orderIt->quantity = $item->qtt;
			$orderIt->return_status = 0;	

			if ($orderIt->save()) {
				$flag = true;
				
			}
			endforeach;
			
			return $flag;
		}

	}

