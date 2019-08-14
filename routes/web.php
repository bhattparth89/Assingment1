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
    return view('welcome');
});

Auth::routes();

Route::get('/redirect', 'AuthGoogleController@redirect');
Route::get('/callback', 'AuthGoogleController@callback');

Route::get('/upload-image','FileController@index');
Route::post('/upload-image',['as'=>'image.upload','uses'=>'FileController@uploadImages']);


Route::get('/home', 'HomeController@index')->name('Home');
