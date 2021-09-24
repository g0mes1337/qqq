<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "returnb".
 *
 * @property int|null $id_worker
 * @property int|null $id_book
 * @property string|null $datereturn
 * @property string|null $condition
 * @property int $id
 *
 * @property Books $book
 */
class Returnb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'returnb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_worker', 'id_book'], 'default', 'value' => null],
            [['id_worker', 'id_book'], 'integer'],
            [['datereturn'], 'safe'],
            [['condition'], 'string'],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['id_book' => 'id']],
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
            'datereturn' => 'Datereturn',
            'condition' => 'Condition',
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
     * Gets query for [[Worker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(User::className(), ['id' => 'id_worker']);
    }
}
