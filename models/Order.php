<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int|null $id_worker
 * @property int|null $id_book
 * @property string|null $datestump
 * @property int|null $issue
 * @property int|null $id_client
 * @property int $id
 *
 * @property Books $book
 * @property Clients $client
 * @property Worker $worker
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_worker', 'id_book', 'issue', 'id_client'], 'default', 'value' => null],
            [['id_worker', 'id_book', 'issue', 'id_client'], 'integer'],
            [['datestump'], 'safe'],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['id_book' => 'id']],
            [['id_client'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['id_client' => 'id']],
            [['id_worker'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_worker' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_worker' => 'Id Worker',
            'id_book' => 'Id Book',
            'datestump' => 'Datestump',
            'issue' => 'Issue',
            'id_client' => 'Id Client',
            'id' => 'ID',
        ];
    }

    /**
     * Gets query for [[Book]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Books::className(), ['id' => 'id_book']);
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'id_client']);
    }

    /**
     * Gets query for [[Worker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(User::className(), ['id' => 'id_worker']);
    }

}
