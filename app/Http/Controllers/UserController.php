<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadLoginIndex(){
        return view('login');
    }
    public function loadRegisterIndex(){
        return view('register');
    }

    public function registration(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
        $data = $request->except('_token', 'password_confirmation', 'password');
        $data['password'] = sha1($request['password']);
        User::create($data);
        return response()->json('Registration Successful');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data['email'] = $request['email'];
        $data['password'] = sha1($request['password']);

        $user = User::where($data)->first();

        if ($user){
            session([
                'user_id' => $user->id,
                'user_email' => $user->email,
                'user_name' => $user->name,
            ]);
            return response()->json('Login Successful');
        } else {
            return response()->json('Login Unsuccessful');
        }
    }
    public function logout(){
        session()->flush();
        return redirect('login');
    }
}
