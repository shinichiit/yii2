<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property integer $status
 * @property integer $parent
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    private $_cats=[];
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['name', 'slug', 'updated_at'], 'required'],
        [['status', 'parent', 'updated_at'], 'integer'],
        [['name', 'slug'], 'string', 'max' => 255],
        [['name'], 'unique'],
        [['slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        'id' => 'ID',
        'name' => 'Tên danh mục',
        'slug' => 'Đường dẫn tĩnh',
        'status' => 'Trạng thái',
        'parent' => 'Danh mục cha',
        'updated_at' => 'Ngày cập nhật',
        ];
    }
    public function getParent($parent=0,$level=''){
        $data=Category::find()->where(['parent'=>$parent])->all();
        $level .='--';
        if ($data) :
            foreach($data as $item):
                if ($item->parent==0) {
                   $level='';
               }
            $this->_cats[$item->id]=$level.$item->name;
            $this->getParent($item->id,$level);
            endforeach;
        endif;
            return $this->_cats;
        }
}
