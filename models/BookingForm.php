<?php

namespace app\models;

use yii\base\Model;

class BookingForm extends Model
{
    public $name;
    public $number;
    public $email;
    public $comment;

    public function rules()
    {
        return [
            [['name', 'number'], 'required'],
            ['email', 'email'],
            ['name', 'string', 'length'=>[2,10]],
            ['comment', 'string', 'length'=>[5,20]],
        ];
    }

    public function booking(){

        if(!$this->validate()){
            return null;
        }
        $date=date('H:i', strtotime(substr($_SESSION['time'], 11, -3 )));

        foreach ($_SESSION['services'] as $K=> $v) {
            $reg = new Registration();
            $reg->name = $this->name;
            $reg->number = $this->number;
            $reg->email = $this->email;
            $reg->comment = $this->comment;
            $reg->worker = $_SESSION['personal'][0]['name'];
            $reg->service=$v[0]['name'];
            $reg->time=$date;
            $reg->date=substr($_SESSION['time'], 0, 10);
            if(!$reg->save()){
                return null;
            }
            $date=date("H:i", strtotime("+45 minutes", strtotime($date)));
        }

        return $reg;
    }
}