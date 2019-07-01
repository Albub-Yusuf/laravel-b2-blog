<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function addSubscriber(Request $request){

    	$request->validate([
    		'email' => 'required|email'
    	]);
    	//$data['subscriber'] = $request->except('_token');
    	Subscriber::create(['email'=>$request->email]);
    	return redirect()->route('home');



    }
}
