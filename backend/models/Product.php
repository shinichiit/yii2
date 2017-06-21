<?php

namespace backend\models;

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
             ['image', 'file', 'extensions' => 'jpg,jpeg, gif, png,jpeg,bmp'],
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

    // public function upload()
    // {
    //     if ($this->validate()) {
    //         $alias = \Yii::getAlias('@backend');
    //         $link_khong_dau = Product::move_dau($this->image->baseName).'-'.(String)time();
    //         $path = $alias.'/yiidemo/uploads/images';
    //         FileHelper::createDirectory($path);
    //         $this->image->saveAs($path.'/'. $link_khong_dau. '.' . $this->image->extension);
    //         $path_save_db ='../../uploads/images/'. $link_khong_dau. '.' . $this->image->extension;
    //         $models_image = new Product();
    //         $models_image->image = $path_save_db;
    //         // $models_image->alt = $this->alt;
    //         $models_image->save();
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
