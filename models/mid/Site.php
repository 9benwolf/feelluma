<?php

namespace app\models\mid;

use yii\db\ActiveRecord;
use Yii;

class Site extends ActiveRecord
{

    public static function getDb()
    {
        return Yii::$app->get('dbMids');
    }

    public static function tableName()
    {
        return 'sites';
    }

    public function getTransactions()
    {
        return $this->hasMany(Transaction::class, [
            'site_id' => 'id'
        ]);
    }

}