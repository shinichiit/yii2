<?php 
	namespace frontend\components;
	use Yii;
	
	/**
	* xu ly gio hang gom cac phuong thuc
	*/
	class Cart
	{
		/*
			Phuong thuc them vao gio hang cac tham so sau
			$data = se lay theo id hoac slug
			$quantity -?> so luong moi lan them vao gio hang thuong la 1
		*/
		/*
			khoi tao session trong yii su dung Yii::$app->session['ten_seesion'] = 'gia tri'
			Lay gia tri cua session su dung $session = Yii:$app->session['ten_sesion'];	
		*/
			public $cartstore;
			public $getCost = 0;
			public function __construct(){
				$this->cartstore = Yii::$app->session['cart'];
				$this->getCost = $this->getCost();
			}

			
		public function add($data, $quantity=1)
		{
			if (isset($this->cartstore[$data->id])) {
				$this->cartstore[$data->id]->qtt=$this->cartstore[$data->id]->qtt+1;
				Yii::$app->session['cart']= $this->cartstore;
			}else{
				$this->cartstore[$data->id] = $data;
			$this->cartstore[$data->id]->qtt = $quantity;
			Yii::$app->session['cart']= $this->cartstore;
			}
			


		}
		public function remove($data){
			unset($this->cartstore[$data->id]);
			Yii::$app->session['cart']= $this->cartstore;
		}

		public function update($id, $quantity){
			$this->cartstore[$id]->qtt=$quantity;
			Yii::$app->session['cart']=$this->cartstore;
		}

		public function getCost()
		{	
			if ($this->cartstore) {
				foreach ($this->cartstore as $item) {
					$this->getCost+=$item->qtt*$item->price;
				}
			}

			return $this->getCost;
				
		}

		public function removeall(){
			$this->cartstore=[];
			Yii::$app->session['cart']= $this->cartstore;
		}
	}
 ?>