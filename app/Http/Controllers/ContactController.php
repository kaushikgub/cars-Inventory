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
        $data = $request->except('_token', 'massage');
        $data['bodyMassage'] = $request['massage'];
        Mail::send('user-contact-mail-body', $data, function ($massage) use ($data){
            $massage->from($data['email']);
            $massage->to('kaushik.gub@gmail.com');
            $massage->subject($data['subject']);
        });
        return redirect('/');
    }
}
