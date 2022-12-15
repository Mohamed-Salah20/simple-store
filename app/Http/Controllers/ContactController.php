<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Msg;


class ContactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
        // dd($request);

        $validatedData = $request->validate([
        'name' => ['required','max:25'],
        'email' => ['required','email'],
        'subject' =>['required','max:25'],
        'message' =>['required']
        ]);

        // dd($validatedData);

        $msg = new Msg;

        $msg->name=$validatedData['name'];
        $msg->email=$validatedData['email'];
        $msg->subject=$validatedData['subject'];
        $msg->content=$validatedData['message'];

        $msg->save();


        return back()->with('msg.stored', 'data added succefuly a response will be sent to your email : ' . $msg->email);
    }
}