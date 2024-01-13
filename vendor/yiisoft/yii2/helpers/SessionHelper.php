<?php

namespace yii\helpers;

use app\models\Personal;
use app\models\Schedule;

class SessionHelper
{
    public static function Check($name, $array)
    {
        if(!\Yii::$app->session->has($name)){
            return -1;
        }
        foreach ($_SESSION[$name] as $k=>$v){
            if($v[0]==$array){
                return $k;
            }
        }
        return -1;
    }

    public static function Category($category)
    {
        if (\Yii::$app->session->has('services')) {
            if ($category != $_SESSION['services'][array_rand($_SESSION['services'])][0]['worker']) {
                return "disabled";
            }

        }
    }

    public static function Personal($name)
    {
        if(\Yii::$app->session->has('personal')){
            if($_SESSION['personal'][0]['name']==$name){
                return "substrate-selected";
            }else{
                return "undefined";
            }
        }else{
            return "undefined";
        }
    }

    public static function Time($time)
    {
        if(\Yii::$app->session->has('time')){
            if(substr($_SESSION['time'],0, 10)=="$time"){
                return 'pressed';
            }
        }
        if(\Yii::$app->session->has('personal')){
            $q=Schedule::find()->where(['worker'=>$_SESSION['personal'][0]['name'], 'time'=>$time])->all();
            if(!$q){
                return 'disabled';
            }
        }
        if(\Yii::$app->session->has('services')){
            $q=Personal::find()->innerJoin('schedule', 'personal.name=schedule.worker')->where(['personal.status'=>$_SESSION['services'][array_rand($_SESSION['services'])][0]['worker'], 'schedule.time']);
        }

    }
}