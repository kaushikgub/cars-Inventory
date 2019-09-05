<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function CarSearch(Request $request){
        return response()->json($request);
    }
}
