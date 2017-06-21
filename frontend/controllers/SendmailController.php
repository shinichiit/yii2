<?php
namespace frontend\controllers;
 use Yii;
use yii\base\Controller;
use frontend\models\Sendmail;
 
class SendmailController extends Controller {
	public function actionIndex() {
		$model = new Sendmail();
		if ($model->load(Yii::$app->request->post()) & $model->validate())
		{
			$aa = Yii::$app->mailer->compose ()
			->setFrom ( 'cuongh3t2tn@gmail.com' )
			->setTo ($model->form_input)
			->setSubject ( 'Test mail ses ở HBSPROGRAM.COM' )
			->setTextBody ( 'Đây là ví dụ về sendmail với amazon ses của trang hbsprogram.com' )
			->send ();
			return $this->render('thongbao',['model'=>$model]);
		}
		else 
		{

			return $this->render('index',['model'=>$model]);
		}
		
	}
}