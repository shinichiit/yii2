<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $pro_id
 * @property string $pro_name
 * @property string $cat_id
 * @property string $slug
 * @property string $image
 * @property string $desc
 * @property string $metadesc
 * @property integer $price
 * @property integer $quantity
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_name', 'slug', 'image', 'metadesc', 'created_at', 'updated_at'], 'required'],
            [['metadesc'], 'string'],
            [['price', 'quantity', 'created_at', 'updated_at'], 'integer'],
            [['pro_name', 'slug', 'image', 'desc'], 'string', 'max' => 255],
            [['cat_id'], 'string', 'max' => 100],
            [['pro_name'], 'unique'],
            [['slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'Pro ID',
            'pro_name' => 'Pro Name',
            'cat_id' => 'Cat ID',
            'slug' => 'Slug',
            'image' => 'Image',
            'desc' => 'Desc',
            'metadesc' => 'Metadesc',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    static function getProductHomePage(){
        $criteria = new CDbCriteria;
        $criteria->select = '*';
        $criteria->condition = 'cat_id ='.$id;
        $criteria->limit = 12;
        $data = Product::model()->findAll($criteria);
        return $data;
    }

    static function getNumberRecord($id){
        $criteria = new CDbCriteria;
        $criteria->select = '*';
        $criteria->condition = 'cat_id ='.$id;
        $data = Product::model()->count();
        return $data;
    }

    static function getproductByid($id,$page = 0, $page = 0){
        $criteria = new CDbCriteria;
        $criteria->select = '*';
        $criteria->condition = 'cat_id ='.$id;
        $criteria->limit = $apage;
        $data = Product::model()->findAll($criteria);
        return $data;
    }
}
