<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loadAdminLoginIndex(){
        return view('admin-login');
    }

    public function loadListingIndex(){
        return view('admin-list');
    }

    public function loadCarUploadIndex(){
        return view('admin-car-upload');
    }
}
