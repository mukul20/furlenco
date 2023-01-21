<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File, Mail, View;

class EmailController extends Controller
{
    /**
     * Display the list of resources.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = [
            'welcome'
        ];

        return View::make('emails', ['emails' => $emails])->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $email
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        return View::make('emails.' . $email)->render();
    }

    /**
     * Send email.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        Mail::send('emails.' . $request->get('email'), [], function($message) {
            $message->to('mukulpesse@gmail.com', 'Furlenco')->subject('Subject');
            $message->from('mukulpesse@gmail.com', 'Mukul');
        });
    }

    /**
     * Generate email file.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generateEmailFile(Request $request)
    {
        $content = View::make('emails.' . $request->get('email'))->render();
        $fileName = $request->get('email') . '.html';
        $fileStorePath = public_path('/generatedEmails/' . $fileName);
        File::put($fileStorePath, $content);

        return response()->download($fileStorePath);
    }
}
