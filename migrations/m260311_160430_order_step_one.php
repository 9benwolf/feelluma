<?php

use yii\db\Migration;

class m260311_160430_order_step_one extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_step_one', [
            'id' => $this->primaryKey(),
            'page' => $this->string(),
            'firstName' => $this->string(),
            'lastName' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'shippingAddress1' => $this->string(),
            'shippingZip' => $this->string(),
            'shippingCity' => $this->string(),
            'shippingCountry' => $this->string(),
            'shippingState' => $this->string(),
            'keyword' => $this->string(),
            'adgroupid' => $this->string(),
            'utm_campaign' => $this->string(),
            'utm_content' => $this->string(),
            'ip_address' => $this->string(),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m260311_160430_order_step_one cannot be reverted.\n";

        return false;
    }
}
