<?php
  
namespace App\Http\Controllers;
  
use Mail;
use App\Models\User;
use App\Mail\UserEmail;
use Illuminate\Http\Request;  
class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendEmail()
    {
        $mailData = [

            'title' => 'Mail from Aamir Shahzad',

            'body' => 'This is for testing email using smtp.'

        ];

  

        $ccEmails = ["employee@gmail.com", "user@gmail.com"];

        $bccEmails = ["aamirshahzadprince@gmail.com", "Aamirshahzad145@yahoo.com"];

         

        Mail::to('admin@gmail.com')

                ->cc($ccEmails)

                ->bcc($bccEmails)

                ->send(new DemoMail($mailData));

           

        dd("Email is sent successfully.")
    }
}
