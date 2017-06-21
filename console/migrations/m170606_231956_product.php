<?php

use yii\db\Migration;

class m170606_231956_product extends Migration
{
   public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'pro_id' => $this->primaryKey(),
            'pro_name' => $this->string()->notNull()->unique(),
            'cat_id' => $this->string(100)->notNull()->defaultValue(0),
             'slug' => $this->string()->notNull()->unique(),
            'image' => $this->string()->notNull(),
            'desc' => $this->string(),
            'metadesc' => $this->text()->notNull(),
            'price' => $this->integer()->notNull()->defaultValue(0),
            'quantity' => $this->integer()->notNull()->defaultValue(0),
             

             'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),


        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');
    }
}
