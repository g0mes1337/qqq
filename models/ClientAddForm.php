<?php

namespace app\models;

use yii\base\Model;

class ClientAddForm extends Model
{
    public $name;
    public $surname;
    public $patronymic;
    public $pasport;


    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic','pasport'], 'required'],
            [['pasport'], 'integer'],

        ];
    }

    public function clientAdd()
    {
        $client = new Clients();
        $client->name = $this->name;
        $client->surname=$this->surname;
        $client->patronymic=$this->patronymic;
        $client->pasport=$this->pasport;
        $client->save();
    }


}