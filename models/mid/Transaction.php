<?php

namespace app\models\mid;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class Transaction extends ActiveRecord
{

    public static function getDb()
    {
        return Yii::$app->get('dbMids');
    }

    public static function tableName()
    {
        return 'transactions';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => function () {
                    return date('Y-m-d H:i:s'); // for DATETIME column
                },
            ],
        ];
    }

    public function getItems()
    {
        return $this->hasMany(Product::class, ['id' => 'product_id'])
            ->viaTable('transaction_items', ['transaction_id' => 'id']);
    }

    public function syncItems(array $items)
    {
        foreach ($items as $productId => $item) {
            Yii::$app->dbMids->createCommand()->insert('transaction_items', [
                'transaction_id' => $this->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'product_type' => $item['product_type'],
            ])->execute();
        }
    }
}