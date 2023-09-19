<?php

namespace app\forms;

use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $departament;
    public $message;
    public $agreed;

    const DEP_SUPPORT = 'support';
    const DEP_FINANCIAL = 'financial';
    
    public function rules()
    {
        return parent::rules();
    }
}