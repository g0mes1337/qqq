<?php

namespace app\models;

use yii\base\Model;

class BookAddForm extends Model
{
    public $name;
    public $article;
    public $date;
    public $author;

    public function rules()
    {
        return [
            [['name', 'article', 'author'], 'required'],
        ];
    }

    public function BookAdd()
    {
        $book = new Books();
        $book->name = $this->name;
        $book->article=$this->article;
        $book->author=$this->author;
        $book->date=date('Y-m-d');
        $book->save();
    }
}
