<?php

namespace App\Http\Controllers;

use App\Mail\SingUp;
use Exception;
use Illuminate\Support\Facades\Mail;
use Log;
class MailController extends Controller
{

    public function sendMail(){

        try{
            $toEmailAddress="ayakhlife613@gmail.com";
            $message="welcome to the website";
            $response=Mail::to($toEmailAddress)->send(new SingUp($message));
            dd($response);
        }
        catch(Exception $e){
         Log::error('message' . $e->getMessage());
        }
    }
}
