<?php

namespace app\controllers;

use app\models\Category;
use app\models\Personal;
use app\models\Services;
use yii\helpers\Url;
use yii\web\Controller;
use yii\db\Query;

class RegistrationController extends Controller
{
    public function actionShow()
    {

        return $this->render('index');
    }

    public function actionServis($id)
    {
        $session=\Yii::$app->session;
        $session->open();
        if(count($_SESSION['services'])==1){
            unset($_SESSION['services']);
        }
        unset($_SESSION['services'][$id]);
    }

    public function actionDelete($name)
    {
        $session=\Yii::$app->session;
        $session->open();
        $session->remove($name);
    }

}