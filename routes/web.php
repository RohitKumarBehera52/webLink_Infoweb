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

Route::match(['get','post'],'/Admin/{controller}/{action?}/{params?}', function ($controller, $action='index', $params='') { 
    $params = explode('/', $params);
    $app = app();
    
    if(strpos($controller,'-') !==false){

        $strControllerName = implode('', array_map('ucwords', explode('-',$controller)));

    }else{
        $strControllerName = ucwords($controller);
    }

    $objController = $app->make("\App\Http\Controllers\Admin\\".$strControllerName.'Controller' );

     // if(!route_access_allowed($controller, $action)){
     //     return "You don't have permission to access this page"; 
     // }

    return $objController->callAction($action, $params);
    
})->where('params', '[A-Za-z0-9/]+');//->middleware('checkadminuser');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
