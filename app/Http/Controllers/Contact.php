<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Mail;
use Illuminate\Http\Request;
use Session;

class Contact extends BaseController
{
	public function index(Request $request){
		
		\Mail::send('emails.contact',
			array(
				'fname' => $request->name,
				'lname' => $request->lname,
				'company' => $request->company,
				'designation' => $request->designation,
				'email' => $request->email,
				'phone' => $request->phone,
				'country' => $request->country,
				'about' => $request->about,
				'user_message' => $request->message
			),  function($message) use ($request)
			{
				$message->to('nishantjain1407@gmail.com')->subject('Get in touch with us');
			});
		Session::flash('success', 'Thanks for contacting us! We will get in touch with you shortly.');
		 return redirect('contact-us');
	}
}
