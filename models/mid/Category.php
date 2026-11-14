<?php

namespace app\models\mid;

use Yii;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function getDb()
    {
        return Yii::$app->get('dbMids');
    }

    public static function tableName()
    {
        return 'categories';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::class, [
            'product_id' => 'id'
        ]);
    }

}