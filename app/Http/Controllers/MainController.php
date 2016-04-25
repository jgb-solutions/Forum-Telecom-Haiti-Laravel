<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function getIndex()
    {
    	return view('home');
    }

    public function postProcess(Request $request)
    {
    	return $response = ['success' => true, 'data' => $request->all()];
    }
}
