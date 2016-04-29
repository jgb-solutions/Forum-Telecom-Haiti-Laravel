<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Snowfire\Beautymail\Beautymail;

use Mail;

class MainController extends Controller
{
    public function getIndex()
    {
    	return view('home');
    }

    public function postRegister(Request $request)
    {
    	$data = $request->all();

    	$beautymail = app()->make(Beautymail::class);

	    $beautymail->send('emails.welcome', $data, function($message) use ($data)
	    {
	        $message
	            ->from( config('site.email') )
	            ->to($data['email'], $data['firstname'])
	            ->subject('Complétion de votre inscription au forum')
	            ->replyTo( config('site.email') );
	    });

    	if (Mail::failures())
    	{
		        // return response showing failed emails
		}

    	return $response = ['success' => true, 'data' => $request->all()];
    }

    public function postContact()
    {
    	$data = $request->all();

    	$beautymail = app()->make(Beautymail::class);

	    $beautymail->send('emails.welcome', $data, function($message) use ($data)
	    {
	        $message
	            ->from( config('site.email') )
	            ->to($data['email'], $data['firstname'])
	            ->subject('Contact')
	            ->replyTo( config('site.email') );
	    });

    	if (Mail::failures())
    	{
		        // return response showing failed emails
		}

    	return $response = ['success' => true, 'data' => $request->all()];
    }
}
