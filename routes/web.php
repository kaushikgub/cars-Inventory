<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get("/email", function() {
//    \Illuminate\Support\Facades\Mail::raw('Now I know how to send emails with Laravel', function($message)
//    {
//        $message->subject('Hi There!!');
//        $message->from(config('mail.from.address'), config("app.name"));
//        $message->to('kaushik.gub@gmail.com');
//    });
//});

Route::get('/', function () {
    return view('index');
});


Route::get('admin-panel', 'AdminController@loadAdminLoginIndex');
Route::post('admin-panel', 'AdminController@loginAttempted');
Route::get('admin-logout', 'AdminController@logoutAttempted')->middleware('admin');
Route::get('admin-panel/car-list', 'CarController@loadListingIndex')->middleware('admin');
Route::get('admin-panel/car-upload', 'CarController@loadCarUploadIndex')->middleware('admin');
Route::post('admin-panel/car-upload', 'CarController@uploadCar')->middleware('admin');
Route::post('admin-panel/car-update', 'CarController@updateCar')->middleware('admin');
Route::get('admin-panel/car-edit/{id}', 'CarController@adminCarEdit')->middleware('admin');
Route::get('admin-panel/car-delete/{id}', 'CarController@adminCarDelete')->middleware('admin');
Route::get('admin-panel/car-sell/{id}', 'CarController@adminCarSellUpdate')->middleware('admin');


Route::get('register/', 'UserController@loadRegisterIndex');
Route::post('register/', 'UserController@registration');
Route::get('login/', 'UserController@loadLoginIndex');
Route::post('login/', 'UserController@login');
Route::get('logout/', 'UserController@logout')->middleware('user');
Route::get('contact/', 'ContactController@loadContactIndex')->middleware('user');
Route::post('contact/user-mail', 'ContactController@contactUserMassage')->middleware('user');
Route::get('car/inventory/data/{sort}', 'CarController@loadCarInIndexPage');
Route::get('car/inventory/{id}', 'CarController@carDetails')->middleware('user');
Route::post('car/search', 'CarController@CarSearch')->middleware('user');

