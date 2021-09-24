<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string|null $name
 * @property string|null $article
 * @property string|null $date
 * @property string|null $author
 * @property int|null $status
 * @property int $id
 * @property string|null $checkbook
 *
 * @property Order[] $orders
 * @property Returnb[] $returnbs
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'article', 'author', 'checkbook'], 'string'],
            [['date'], 'safe'],
            [['status'], 'default', 'value' => null],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'article' => 'Article',
            'date' => 'Date',
            'author' => 'Author',
            'status' => 'Status',
            'id' => 'ID',
            'checkbook' => 'Checkbook',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_book' => 'id']);
    }

    /**
     * Gets query for [[Returnbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturnbs()
    {
        return $this->hasMany(Returnb::className(), ['id_book' => 'id']);
    }
}
