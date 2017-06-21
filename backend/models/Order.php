<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property string $oder_note
 * @property integer $amount
 * @property string $shipping_method
 * @property string $payment_method
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'oder_note', 'shipping_method', 'payment_method', 'created_at', 'updated_at'], 'required'],
            [['customer_id', 'amount', 'status', 'created_at', 'updated_at'], 'integer'],
            [['oder_note'], 'string'],
            [['shipping_method', 'payment_method'], 'string', 'max' => 255],
            [['shipping_method'], 'unique'],
            [['payment_method'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'oder_note' => 'Oder Note',
            'amount' => 'Amount',
            'shipping_method' => 'Shipping Method',
            'payment_method' => 'Payment Method',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
