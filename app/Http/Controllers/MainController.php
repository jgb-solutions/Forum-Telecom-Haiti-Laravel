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

    public function postProcess(Request $request)
    {
    	// Mail::queue(view, data, callback, queue)
    	return $response = ['success' => true, 'data' => $request->all()];
    }

    public function getTest()
    {
    	$beautymail = app()->make(Beautymail::class);

	    $beautymail->send('emails.welcome', [], function($message)
	    {
	        $message
	            ->from( config('site.email') )
	            ->to('jgbneatdesign@gmail.com', config('site.name'))
	            ->subject('Welcome!')
	            ->replyTo( config('site.email') );
	    });
    }
}
