<?php

namespace app\controllers;

use app\models\Category;
use app\models\Services;
use yii\db\Query;
use yii\web\Controller;

class ServicesController extends Controller
{
    public function actionShow(){

        if(\Yii::$app->session->has('personal')){
            $category=array(array('status'=>$_SESSION['personal'][0]['status']));
        }elseif(\Yii::$app->session->has('time')) {
            $category=(new Query())
                ->select('status')
                ->from('personal')
                ->innerJoin('schedule', 'schedule.worker=personal.name')
                ->where(['schedule.time'=>substr($_SESSION['time'],0, 10)])
                ->distinct()
                ->createCommand()
                ->queryAll();
        }else{
            $category=Category::find()->asArray()->all();
        }
        $all_services=array();
        foreach ($category as $k=>$v){
            $all_services[$v['status']]=Services::find()->where(['worker'=>$v['status']])->asArray()->all();
        }

        return $this->render('services', compact('category', 'all_services'));
    }

    public function actionSession($name, $value)
    {
        $session=\Yii::$app->session;
        $session->open();

        if(\Yii::$app->request->isAjax){
            $value=explode(".", $value);
            $query=(new \yii\db\Query())
                ->select('*')
                ->from("$name")
                ->where(['name'=>$value[0],
                    'worker'=>$value[1]
                ])
                ->createCommand()
                ->queryAll();

            $_SESSION[$name][]=$query;
        }
    }

    public function actionDelete($id)
    {
        $session=\Yii::$app->session;
        $session->open();
        if(count($_SESSION['services'])==1){
            unset($_SESSION['services']);
        }
        unset($_SESSION['services'][$id]);
    }
}