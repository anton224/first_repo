<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class messagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        // Create new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->message = $request->input('message');
        $message->email = $request->input('email');

        // Save message
        $message->save();

        //Redirect
        return redirect('/')->with('success','Message Sent');
    }
}
