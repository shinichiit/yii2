<?php

use yii\db\Migration;

class m170524_223247_book extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'cate' => $this->string(100)->notNull()->defaultValue(0),
             'slug' => $this->string()->notNull()->unique(),
            'image' => $this->string()->notNull(),
            'desc' => $this->string(),
            'content' => $this->text()->notNull(),
            'price' => $this->integer()->notNull()->defaultValue(0),
            'quantity' => $this->integer()->notNull()->defaultValue(0),
             'author' => $this->string(100),
             'page' => $this->integer()->notNull(),
             'status'=>$this->smallInteger()->notNull()->defaultValue(0),
             'publish_at' => $this->integer()->notNull(),

             'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),


        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%book}}');
    }
}
