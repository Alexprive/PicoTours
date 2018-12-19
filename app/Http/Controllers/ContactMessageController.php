<?php

namespace App\Http\Controllers;
use email;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create() {
        return view('inc/contact');
    }
    public function store(Request $request) {
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'message'=> 'required'
       ]);
       Mail::send('email.contact-message', [
           
           'email'=>$request->email,
           'name'=>$request->name,
           'phone'=>$request->phone,
           'msg' => $request->message

       ], function ($mail) use($request) {
           $mail->from($request->email, $request->name, $request->phone);

           $mail->to('hello@example.com')->subject('Post voor Pico');
       });
        return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }
}