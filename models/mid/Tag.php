<?php

namespace app\models\mid;

use Yii;
use yii\db\ActiveRecord;

class Tag extends ActiveRecord
{

    public static function getDb()
    {
        return Yii::$app->get('dbMids');
    }

    public static function tableName()
    {
        return 'tags';
    }

}