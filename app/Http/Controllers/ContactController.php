<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function loadContactIndex(){
        return view('contact');
    }
    public function contactUserMassage(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'subject' => 'required|max:255',
            'massage' => 'required',
        ]);
        Mail::to('kaushik.gub@gmail.com')->send(new UserMail($request['name'], $request['email'], $request['subject'], $request['massage']));
        return redirect('/');
    }
}
