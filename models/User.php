<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "worker".
 *
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $patronymic
 * @property string|null $position
 * @property string|null $email
 * @property string|null $password
 * @property int $id
 *
 * @property Order[] $orders
 * @property Returnb[] $returnbs
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'position', 'email', 'password'], 'string'],
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
            'position' => 'Position',
            'email' => 'Email',
            'password' => 'Password',
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
        return $this->hasMany(Order::className(), ['id_worker' => 'id']);
    }

    /**
     * Gets query for [[Returnbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturnbs()
    {
        return $this->hasMany(Returnb::className(), ['id_worker' => 'id']);
        /**
         * {@inheritdoc}
         */
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }


    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }


    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }


    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    public static function findByEmail($email)
    {
        return User::find()->where(['email' => $email])->one();
    }

    public function validatePassword($user, $password)
    {
        if (Yii::$app->security->validatePassword($password, $user->password)) {
            return true;
        } else {
            return false;
        }
    }

}
