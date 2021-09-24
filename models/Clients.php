<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $patronymic
 * @property int|null $pasport
 * @property int $id
 *
 * @property Order[] $orders
 * @property Returnb[] $returnbs
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic'], 'string'],
            [['pasport'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'pasport' => 'Pasport',
            'id' => 'ID',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_client' => 'id']);
    }

    /**
     * Gets query for [[Returnbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturnbs()
    {
        return $this->hasMany(Returnb::className(), ['id_client' => 'id']);
    }
}
