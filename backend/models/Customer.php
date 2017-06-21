<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $username
 * @property string $full_name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reste_token
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'full_name', 'auth_key', 'password_hash', 'email', 'phone', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'full_name', 'password_hash', 'password_reste_token', 'email', 'phone', 'address'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [['full_name'], 'unique'],
            [['password_reste_token'], 'unique'],
            [['email'], 'unique'],
            [['phone'], 'unique'],
            [['address'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'full_name' => 'Full Name',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reste_token' => 'Password Reste Token',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
