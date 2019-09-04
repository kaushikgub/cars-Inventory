<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loadAdminLoginIndex(){
        if (session('admin_id')){
            return redirect('admin-panel/car-list');
        } else {
            return view('admin-login');
        }
    }

    public function loginAttempted(Request $request){
        $request->validate([
            'email'=> 'required|max:255|email',
            'password'=> 'required',
        ]);
        $data = $request->except('_token', 'password');
        $data['password'] = sha1($request['password']);
        $admin = Admin::where($data)->first();
        if ($admin){
            session([
               'admin_id' => $admin->id,
               'admin_email' => $admin->email,
               'admin_name' => $admin->name,
            ]);
            return response()->json('Login Successful');
        }
        return response()->json('Login Unsuccessful');
    }

    public function loadListingIndex(){
        return view('admin-list');
    }

    public function loadCarUploadIndex(){
        return view('admin-car-upload');
    }

    public function logoutAttempted(){
        session()->flush();
        return redirect('admin-panel');
    }
}
