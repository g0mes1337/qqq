<?php
namespace app\models;

use yii\base\Model;

class AddOrderForm extends Model
{
    public $issue;
    public $id_book;
    public $id_client;

    public function rules()
    {
        return [
            [['issue','id_book','id_client'], 'required'],
            ['issue','integer'],
        ];
    }

    public function OrderAdd()
    {
        $order = new Order();
        $order->id_book = $this->id_book;
        $order->id_client=$this->id_client;
        $order->id_worker=\Yii::$app->user->identity->id;
        $order->datestump=date('Y-m-d');
        $order->issue=$this->issue;
        $book=Books::findOne($this->id_book);
        $book->checkbook='false';
        $book->save();
        $order->save();
    }
}