<?php

namespace app\models;

use yii\base\Model;

class ReturnbAddForm extends Model
{
    public $id_book;
    public $condition;

    public function rules()
    {
        return [
            [['id_book', 'condition'], 'required'],
        ];
    }

    public function ReturnbAdd()
    {
        $returnb = new Returnb();
        $returnb ->id_book = $this->id_book;
        $returnb ->id_worker = \Yii::$app->user->identity->id;
        $returnb ->datereturn = date('Y-m-d');
        $returnb ->condition = $this->condition;
        $book=Books::findOne($this->id_book);
        $book->checkbook='true';
        $book->save();
        $returnb ->save();
    }
}