<?php

use yii\db\Migration;

class m260311_155346_order_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_items', [
            'id' => $this->primaryKey(),
            'orderId' => $this->integer()->notNull(),
            'productId' => $this->integer()->notNull(),
            'name' => $this->string(),
            'quantity' => $this->integer(),
            'amount' => $this->double(),
        ]);

        $this->createIndex('order_items_orderId', 'order_items', 'orderId');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m260311_155346_order_items cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m260311_155346_order_items cannot be reverted.\n";

        return false;
    }
    */
}
