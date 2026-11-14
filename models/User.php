<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $role
 * @property integer $updated_at
 * @property integer $created_at
 *
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    const ROLE_USER = 0;
    const ROLE_ADMIN = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                // If your columns are named 'created_at' and 'updated_at':
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                // Use time() to store UNIX timestamp in the INT fields
                'value' => function () {
                    return time();
                },
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'role'], 'required'],
            [['role', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
            'created_at' => 'Date Created',
            'updated_at' => 'Date Updated',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return User::findOne(['id' => $id]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {


        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return "";
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return true;
    }
    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password,  $this->password);
    }
}
