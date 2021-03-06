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

use App\Http\Controllers\AdFormController;
// use Symfony\Component\Routing\Annotation\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('tests/test', 'TestController@index');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware('auth:api', 'throttle:60,1')->group(function () {
//     //REST
//     // Route::resource('ads', 'AdFormController');
//     Route::get('index','AdFormController@index');
// });

Route::group(['middleware' => 'auth'], function(){
    // Route::get('index','AdFormController@index');
    Route::resource('ads', 'AdFormController');
});

// Route::get('/', function () {
//     return view('/home');
// })->name('login');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
