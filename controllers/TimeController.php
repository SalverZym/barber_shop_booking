<?php

namespace app\controllers;

use app\models\Registration;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;

class TimeController extends Controller
{
    public function actionShow($date)
    {
        $times=array(
            'УТРО'=>array('09:00', '09:30', '10:00', '10:30', "11:00", '11:30'),
            'ДЕНЬ'=>array('12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '14:45', "15:00", '15:15', '15:30', '15:45', '16:00', '16:45', '17:30'),
            'ВЕЧЕР'=>array('18:00', '18:45', '19:30', '20:15', '20:45'),
        );
        if(\Yii::$app->session->has('personal')){
            $q=(new Query())
                ->select('time')
                ->from('registration')
                ->where(['date'=>substr($date,0, 10), 'worker'=>$_SESSION['personal'][0]['name']])
                ->createCommand()
                ->queryAll();
            $registrations=array("0");

            foreach ($q as $key=>$value){
                $registrations[]=$value['time'];
            }

            foreach ($times as $k=>$v){
                for($i=0; $i<count($v); $i++){
                    if(array_search($v[$i], $registrations)){
                        unset($times[$k][$i]);
                    }
                }
            }
        }

        if(\Yii::$app->request->isAjax){
            return $this->renderPartial('addtime', compact('times'));
        }

        return $this->render('addtime', compact('times'));
    }

    public function actionSession($date ,$time){
        $session=\Yii::$app->session;
        $session->open();
        $session->set('time', "$date $time");

        return $this->redirect(Url::toRoute(['registration/show']));
    }
}