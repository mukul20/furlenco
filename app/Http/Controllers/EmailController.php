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
            'welcome',
            'payment unsuccessful',
            'return confirmed',
            'unpaid invoice rental'
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
        $assetPath = config('app.asset_url');

        return View::make('emails.' . $this->getEmailViewFile($email), ['assetPath' => $assetPath])->render();
    }

    /**
     * Send email.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        $emailTitle = $request->get('email');
        $assetPath = 'https://raw.githubusercontent.com/mukul20/furlenco/master/public';

        Mail::send('emails.' . $this->getEmailViewFile($request->get('email')), ['assetPath' => $assetPath], function($message) use ($emailTitle) {
            $message->to(['mukulpesse@gmail.com', 'mukul@yopmail.com'], 'Furlenco')->subject(ucwords($emailTitle));
            $message->from('mukulpesse@gmail.com', 'Furlenco');
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
        $assetPath = 'https://raw.githubusercontent.com/mukul20/furlenco/master/public';
        $content = View::make('emails.' . $this->getEmailViewFile($request->get('email')), ['assetPath' => $assetPath])->render();
        $fileName = $request->get('email') . '.html';
        $fileStorePath = public_path('/generatedEmails/' . $fileName);
        File::put($fileStorePath, $content);

        return response()->download($fileStorePath);
    }

    private function getEmailViewFile($emailTitle)
    {
        return str_replace(' ', '', $emailTitle);
    }
}
