<?php

namespace app\controllers;

use app\models\BookingForm;
use app\models\Registration;
use yii\web\Controller;

class BookingController extends Controller
{
    public function actionShow()
    {
        $book=new BookingForm();

        if(\Yii::$app->request->post()){

            if($book->load(\Yii::$app->request->post()) && $book->validate()){
                if($book->booking()){
                    \Yii::$app->session->remove('time');
                    \Yii::$app->session->remove('personal');
                    \Yii::$app->session->remove('services');
                    return $this->redirect('http://barbershop/web/registration/show');
                }else{
                    return null;
                }

            }
        }

        return $this->render('booking', compact('book'));
    }

}