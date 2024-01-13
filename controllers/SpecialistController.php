<?php

namespace app\controllers;

use app\models\Personal;
use yii\db\Query;
use yii\web\Controller;
use yii\helpers\Url;

class SpecialistController extends Controller
{
    public function actionShow()
    {
        if(\Yii::$app->session->has('services') && !(\Yii::$app->session->has('time'))){
            $personal=Personal::find()->where(['status'=>$_SESSION['services'][array_rand($_SESSION['services'])][0]['worker']])->all();
        }elseif (\Yii::$app->session->has('time')){
            $personal=Personal::find()->innerJoin('schedule', 'schedule.worker=personal.name')->where(['schedule.time'=>substr($_SESSION['time'],0, 10)])->all();
        }else{
            $personal=Personal::find()->all();
        }

        return $this->render('addmaster', compact('personal'));
    }

    public function actionSession($name, $value){
        $session=\Yii::$app->session;
        $session->open();
        $query=(new \yii\db\Query())
            ->select('*')
            ->from("$name")
            ->where(['name'=>[$value]])
            ->createCommand()
            ->queryAll();

        $session->set($name, $query);

        return $this->redirect(Url::toRoute(['registration/show']));
    }


}