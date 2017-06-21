<?php
namespace common\models;
use yii\base\Model;
use yii\db\ActiveRecord;
class Search extends ActiveRecord
{
	public static function tableName()
	{
		return 'Book';
	}
	public function rules()
	{
		return [
			[['name','slug'],'string','required'],
			
		];
	}
	public function attributesLabels()
	{
		return [
				'name'=>'Tên',
				'slug' => 'Url đẹp',
		];
	}
}