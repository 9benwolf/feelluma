<?php

namespace app\models\Forms;

use app\models\OrderStepOne;
use Yii;
use yii\base\Model;

/**
 * This is the model class for table "lead_generation".
 *
 * @property string $page
 * @property string $firstName;
 * @property string $lastName;
 * @property string $email;
 * @property string $phone;
 * @property string $shippingAddress1;
 * @property string $shippingZip;
 * @property string $shippingCity;
 * @property string $shippingCountry;
 * @property string $shippingState;
 * @property string $keyword;
 * @property string $adgroupid;
 * @property string $utm_campaign;
 * @property string $utm_content;
 */
class LeadGenForm extends Model
{
    public  $amount;
    public  $productId;
    public  $email;
    public  $firstName;
    public  $lastName;
    public  $phone;
    public  $shippingAddress1;
    public  $shippingZip;
    public  $shippingCity;
    public  $shippingCountry;
    public  $shippingState;
    public  $expirationDate;
    public  $adgroupid;
    public  $keyword;
    public  $utm_campaign;
    public  $utm_content;
    private $_country = 'US';

    public function rules() {
        return [
            [['firstName', 'lastName', 'email', 'phone', 'shippingAddress1', 'shippingZip', 'shippingCity', 'shippingCountry', 'shippingState'], 'required'],
            [['firstName', 'lastName', 'shippingCity', 'shippingCountry', 'shippingState'], 'match', 'pattern' => '/^[a-zA-Z \s]*$/i'],
            [['shippingAddress1', 'shippingZip'], 'match', 'pattern' => '/^[a-zA-Z0-9 \s]*$/i'],
            [['phone'], 'match', 'pattern' => '/^[0-9 ()-]*$/i'],
            ['email', 'email'],
            [['firstName', 'lastName'], 'string', 'max' => '50'],
            [['email'], 'string', 'max' => '100'],
            [['shippingAddress1', 'shippingCountry'], 'string', 'max' => '60'],
            [['shippingState', 'shippingCity'], 'string', 'max' => '40'],
            [['shippingZip'], 'string', 'max' => '20'],
            [['phone'], 'string', 'min' => '10', 'max' => '16'],
            [['shippingZip'], 'string', 'min' => '5', 'max' => '10'],
            [['keyword', 'adgroupid', 'utm_campaign', 'utm_content'], 'string', 'max' => '50'],
        ];
    }

    public function attributeLabels() {
        return [
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'shippingAddress1'    => 'Shipping Address',
            'shippingZip'         => 'Shipping Zip',
            'shippingCity'        => 'Shipping City',
            'shippingCountry'     => 'Shipping Country',
            'shippingState'       => 'Shipping State',
        ];
    }

    public function getCountries() {
        # Countries for Checkout
        return [
            'US' => 'United States',
            //'CA' => 'Canada',
        ];
    }

    public function getStates($country = 'US') {

        /*
         * This only works on initial load
         */
        $country = $this->_country;
        $states  = ['0' => 'No States Found'];
        if ($country == 'US') {
            $states = [
                "AL" => 'Alabama',
                "AK" => 'Alaska',
                "AZ" => 'Arizona',
                "AR" => 'Arkansas',
                "CA" => 'California',
                "CO" => 'Colorado',
                "CT" => 'Connecticut',
                "DC" => 'District of Columbia',
                "DE" => 'Delaware',
                "FL" => 'Florida',
                "GA" => 'Georgia',
                "HI" => 'Hawaii',
                "ID" => 'Idaho',
                "IL" => 'Illinois',
                "IN" => 'Indiana',
                "IA" => 'Iowa',
                "KS" => 'Kansas',
                "KY" => 'Kentucky',
                "LA" => 'Louisiana',
                "ME" => 'Maine',
                "MD" => 'Maryland',
                "MA" => 'Massachusetts',
                "MI" => 'Michigan',
                "MN" => 'Minnesota',
                "MS" => 'Mississippi',
                "MO" => 'Missouri',
                "MT" => 'Montana',
                "NE" => 'Nebraska',
                "NV" => 'Nevada',
                "NH" => 'New Hampshire',
                "NJ" => 'New Jersey',
                "NM" => 'New Mexico',
                "NY" => 'New York',
                "NC" => 'North Carolina',
                "ND" => 'North Dakota',
                "OH" => 'Ohio',
                "OK" => 'Oklahoma',
                "OR" => 'Oregon',
                "PA" => 'Pennsylvania',
                "RI" => 'Rhode Island',
                "SC" => 'South Carolina',
                "SD" => 'South Dakota',
                "TN" => 'Tennessee',
                "TX" => 'Texas',
                "UT" => 'Utah',
                "VT" => 'Vermont',
                "VA" => 'Virginia',
                "WA" => 'Washington',
                "WV" => 'West Virginia',
                "WI" => 'Wisconsin',
                "WY" => 'Wyoming',];
        } else {
            $states = [
                "AB" => "Alberta",
                "BC" => "British Columbia",
                "MB" => "Manitoba",
                "NB" => "New Brunswick",
                "NL" => "Newfoundland and Labrador",
                "NT" => "Northwest Territories",
                "NS" => "Nova Scotia",
                "NU" => "Nunavut",
                "ON" => "Ontario",
                "PE" => "Prince Edward Island",
                "QC" => "Quebec",
                "SK" => "Saskatchewan",
                "YT" => "Yukon",
            ];
        }

        return $states;

    }
}
