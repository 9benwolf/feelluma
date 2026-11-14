<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "order_step_one".
 *
 * @property int $id
 * @property string $page
 * @property string $firstName
 * @property string $lastName
 * @property string $phone
 * @property string $email
 * @property string $shippingAddress1
 * @property string $shippingZip
 * @property string $shippingCity
 * @property string $shippingCountry
 * @property string $shippingState
 * @property string $ip_address
 * @property string $keyword
 * @property string $adgroupid
 * @property string $utm_campaign
 * @property string $utm_content
 * @property integer $updated_at
 * @property integer $created_at
 */
class OrderStepOne extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_step_one';
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['firstName', 'lastName', 'phone', 'email', 'shippingAddress1', 'shippingZip', 'shippingCity', 'shippingCountry', 'shippingState'], 'required'],
            [['created_at'], 'safe'],
            [['firstName', 'lastName', 'phone', 'email', 'shippingAddress1', 'shippingZip', 'shippingCity', 'shippingCountry', 'shippingState', 'ip_address', 'keyword', 'adgroupid', 'utm_campaign', 'utm_content', 'page'], 'string', 'max' => 255],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'shippingAddress1' => 'Shipping Address1',
            'shippingZip' => 'Shipping Zip',
            'shippingCity' => 'Shipping City',
            'shippingCountry' => 'Shipping Country',
            'shippingState' => 'Shipping State',
            'ip_address' => 'Ip Address',
            'keyword' => 'Keyword',
            'adgroupid' => 'Adgroupid',
            'utm_campaign' => 'Utm Campaign',
            'utm_content' => 'Utm Content',
            'created_at' => 'Updated At',
            'updated_at' => 'Created At',
        ];
    }
}
