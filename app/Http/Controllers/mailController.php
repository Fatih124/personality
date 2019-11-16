<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    public function send()
    {
        $email = 'user_email';
        $array = [
            'name' =>'name',
            'surname'=>'user_surname',
            'user_duty'=>'user_duty'
        ];

        mail::send('iletisim', $array,function ($message) use ($email){
            $message->subject('Hoşgeldin');
            $message->to($email);
        });
    }
}