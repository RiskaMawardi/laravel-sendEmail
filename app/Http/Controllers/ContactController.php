<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
use Mail;
use App\Mail\DemoMail;

class ContactController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('mawardiriska17@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
  
}
