<?php

namespace app\controllers;

use app\models\AddOrderForm;
use app\models\BookAddForm;
use app\models\Books;
use app\models\ClientAddForm;
use app\models\Clients;
use app\models\LoginForm;
use app\models\RegistrationForm;
use app\models\Returnb;
use app\models\ReturnbAddForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class MainController extends Controller
{
    public function actionRegistration()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new RegistrationForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {

                $model->registration();
                return $this->render('registrationSuccess');
            }
        }

        return $this->render('registration', [
            'model' => $model,
        ]);
    }

    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new  LoginForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->login();
                return $this->goHome();
            }
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model
        ]);
    }

    public function actionAddclient()
    {
        if (Yii::$app->user->isGuest) {
            return $this->render('index');
        }
        $model = new ClientAddForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->clientAdd();
                return $this->render('success');
            }
        }
        return $this->render('addclient', ['model' => $model]);
    }

    public function actionAddbook()
    {
        if (Yii::$app->user->isGuest) {
            return $this->render('index');
        }
        $model = new BookAddForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->BookAdd();
                return $this->render('success');
            }
        }
        return $this->render('addbook', ['model' => $model]);
    }

    public function actionAddorder()
    {
        if (Yii::$app->user->isGuest) {
            return $this->render('index');
        }
        $model = new AddOrderForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->OrderAdd();
                return $this->render('success');
            }
        }
        return $this->render('addorder', ['model' => $model]);
    }

    public function actionReturnb()
    {
        if (Yii::$app->user->isGuest) {
            return $this->render('index');
        }
        $model = new ReturnbAddForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->ReturnbAdd();
                return $this->render('success');
            }
        }
        return $this->render('returnb', ['model' => $model]);
    }

}