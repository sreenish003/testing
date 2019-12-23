<?php
namespace App\Http\Controllers;
//use App\TestMail;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $data['title'] = "This is Test Mail Tuts Make";
 
        Mail::send('email', $data, function($message) {
 
            $message->to('sreenishcp003@gmail.com', 'Receiver Name')
 
                    ->subject('Tuts Make Mail');
        });
 
        if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
         }else{
           return response()->success('Great! Successfully send in your mail');
         }
    }
    public function send_mail()
    {
        $test = new TestMail();
        Mail::to('anoop@dunamisworld.com')->send(TestMail("work"));
    }
}