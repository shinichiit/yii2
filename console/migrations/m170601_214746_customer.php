<?php

use yii\db\Migration;

class m170601_214746_customer extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%customer}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'full_name' => $this->string()->notNull(),
            'auth_key' => $this->string(100)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reste_token' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'phone' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'status'=>$this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%customer}}');
    }
}
