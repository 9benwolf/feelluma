<?php

namespace app\models\Forms;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $message;

    /**
     * Validation rules
     */
    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
            ['phone', 'safe'],
            [['name', 'email', 'phone', 'message'], 'string', 'max' => 255],
        ];
    }

    /**
     * Sends an email using configured SMTP (ProtonMail)
     *
     * @return bool whether the email was sent
     */
    public function sendEmail()
    {
        try {
            return Yii::$app->mailer->compose()
                ->setTo('contact@feelluma.com')                   // your receiving email
                ->setFrom(['contact@feelluma.com' => 'Feelluma']) // MUST match ProtonMail SMTP
                ->setReplyTo([$this->email => $this->name])       // user email
                ->setSubject('Contact Form Message')
                ->setHtmlBody(
                    "<p><strong>Name:</strong> {$this->name}</p>" .
                        "<p><strong>Email:</strong> {$this->email}</p>" .
                        "<p><strong>Phone:</strong> {$this->phone}</p>" .
                        "<p><strong>Message:</strong><br>" . nl2br($this->message) . "</p>"
                )
                ->send();
        } catch (\Exception $e) {
            Yii::error("ContactForm email failed: " . $e->getMessage());
            return false;
        }
    }
}
