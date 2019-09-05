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
Route::get('admin-logout', 'AdminController@logoutAttempted');
Route::get('admin-panel/car-list', 'CarController@loadListingIndex')->middleware('admin');
Route::get('admin-panel/car-upload', 'CarController@loadCarUploadIndex')->middleware('admin');
Route::post('admin-panel/car-upload', 'CarController@uploadCar')->middleware('admin');


Route::get('login/', 'LoginController@loadLoginIndex');
Route::get('register/', 'LoginController@loadRegisterIndex');
Route::post('register/', 'LoginController@loadRegisterIndex');
Route::get('contact/', 'ContactController@loadContactIndex');
Route::post('contact/user-mail', 'ContactController@contactUserMassage');
Route::get('car/inventory', 'CarController@loadCarInIndexPage');
Route::get('car/inventory/{id}', 'CarController@carDetails');
Route::post('car/search', 'CarController@CarSearch');

