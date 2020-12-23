<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::match(['get','post'],'/Profile/');

//profile view page route
//Route:: get('/profile' , 'HomeController@profile');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile']);

//to upload profile pic
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update_avatar']);
//Route::post('/profile' , 'UserController@update_avatar');
