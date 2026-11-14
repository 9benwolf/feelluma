<?php


namespace app\models\Forms;


use app\models\Orders;
use yii\base\Model;

class UpsellForm extends Model
{
    public $terms;
    public $previous_order_id;
    public $product_id;

    public function rules() {
       return [
            [['terms', 'previous_order_id'], 'integer'],
            [['terms'], 'required', 'requiredValue' => 1, 'message' => 'Please check the box below to confirm the Terms and Conditions to Continue'],
            [['previous_order_id'], 'string'],
            [['previous_order_id'], 'required'],
            [['previous_order_id'], 'validateOrder'],
            [['product_id'], 'safe'],
        ];
    }

    public function validateOrder($attribute, $params) {
        if (! Orders::findOne(['id' => $this->previous_order_id])) {
            $this->addError('previous_order_id', 'There is no such previous order Id in our database');
        }
    }
}