<?php

namespace app\models;


use Yii;
use yii\base\Model;

class RegistrationForm extends Model
{
    public $email;
    public $password;
    public $name;
    public $surname;
    public $patronymic;

    public function rules()
    {

        return [
            [['email', 'password', 'name', 'surname', 'patronymic'], 'required'],
            ['email', 'email'],
        ];
    }

    public function Registration()
    {
        $worker = new User();
        $worker->email = $this->email;
        $worker->name = $this->name;
        $worker->surname = $this->surname;
        $worker->patronymic = $this->patronymic;
        $worker->password = Yii::$app->security->generatePasswordHash($this->password);
        $worker->save();

    }
}