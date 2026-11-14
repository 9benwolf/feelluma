<?php

namespace app\models\mid;

use Yii;
use yii\db\ActiveRecord;

class Media extends ActiveRecord
{

    public static function getDb()
    {
        return Yii::$app->get('dbMids');
    }

    public static function tableName()
    {
        return 'media';
    }

    public function getFullUrl()
    {
        if ($this->disk === 'public') {
            return Yii::$app->request->hostInfo . '/storage/' . $this->id . '/' . $this->file_name;
        }

        if ($this->disk === 's3') {
            $baseUrl = rtrim(Yii::$app->params['aws_url'], '/');
            $rootFolder = trim(Yii::$app->params['aws_root_folder'], '/');

            $key = trim($this->file_name, '/');

            $key = $this->id . '/' . $key;

            if ($rootFolder !== '') {
                $key = $rootFolder . '/' . $key;
            }

            return $baseUrl . '/' . $key;
        }

        return $this->file_name;
    }

}