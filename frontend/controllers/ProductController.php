<?php

namespace frontend\controllers;
use yii\web\Controller;
	use backend\models\Book;

class ProductController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

 
    public function actionList(){
        // $count = Product::getNumberRecord($id);
        // $pages = new CPagination($count);
        // $apage = Yii::$app->param['pager'];
        // $pages->setPageSize($apage);
        // $data = Product::getproductByid($id);
        return $this->render('listProduct');
    }

}
