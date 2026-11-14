<?php

use yii\db\Migration;

class m260311_160726_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'password' => $this->string(),
            'role' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->insert('user', array(
            'username' => 'lc_admin',
            'password' => \app\helpers\UtilityHelper::cryptPass("!@#feellumalc20260410"),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m260311_160726_user cannot be reverted.\n";

        return false;
    }
}
