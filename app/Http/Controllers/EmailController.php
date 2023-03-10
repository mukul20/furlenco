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
            'unpaid invoice rental',
            'order confirmation rental',
            'order cancelled rental',
            'order cancelled full',
            'activity scheduled',
            'activity delayed',
            'activity rescheduled',
            'activity completed',
            'return request confirm',
            'invoice buying',
            'order cancelled partial rental',
            'order confirmation buying',
            'order confirmation purchase',
            'reminder CTD',
            'subscription activated UNLMTD',
            'subscription activated',
            'repair request confirmed',
            'repair request received',
            'email verification',
            'renewal successful',
            'order confirmation UNLMTD',
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
            $message->to([
                'mukulpesse@gmail.com',
                //'sheshank.sridharan@protonmail.com',
                //'rajasekhar.deverakonda@furlenco.com',
                //'mohit.dadhich@furlenco.com',
                //'ranjan.thangjam@furlenco.com',
            ], 'Furlenco')->subject('Test - ' . ucwords($emailTitle));
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

    public function removeClassForm(Request $request)
    {
        $formattedCode = '';

        if ($request->has('code')) {
            $code = $request->get('code');
            $formattedCode = preg_replace('/\sclass=[\'|"][^\'"]+[\'|"]/', '', $code);
        }

        return View::make('removeClass', ['formattedCode' => $formattedCode])->render();
    }
}
