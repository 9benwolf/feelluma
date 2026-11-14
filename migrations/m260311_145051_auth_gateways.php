<?php

use yii\db\Migration;

class m260311_145051_auth_gateways extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('auth_gateways', [
            'id' => $this->primaryKey(),
            'name' => $this->string(250)->notNull(),
            'mid' => $this->string(),
            'isActive' => $this->integer()->notNull()->defaultValue(1),
            'loginId' => $this->string(),
            'transactionKey' => $this->string(),
            'gatewayCounter' => $this->double()->defaultValue(0),
            'isAmexAllowed' => $this->integer(),
            'isDiscoverAllowed' => $this->integer(),
            'isMasterAllowed' => $this->integer(),
            'isVisaAllowed' => $this->integer(),
            'weight' => $this->integer(),
            'campaignId' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createIndex('auth_gateways_isActive', 'auth_gateways', 'isActive');
        $this->createIndex('auth_gateways_name', 'auth_gateways', 'name');
        $this->createIndex('auth_gateways_campaignId', 'auth_gateways', 'campaignId');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m260311_145051_auth_gateways cannot be reverted.\n";

        return false;
    }
}
