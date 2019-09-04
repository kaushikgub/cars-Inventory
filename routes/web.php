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

Route::get('/', function () {
    return view('index');
});
Route::get('admin-panel', 'AdminController@loadAdminLoginIndex');
Route::get('admin-panel/car-list', 'AdminController@loadListingIndex')->middleware('admin');
Route::get('admin-panel/car-upload', 'AdminController@loadCarUploadIndex')->middleware('admin');


Route::get('login/', 'LoginController@loadLoginIndex');
Route::get('register/', 'LoginController@loadRegisterIndex');
Route::get('contact/', 'ContactController@loadContactIndex');