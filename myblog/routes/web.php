<?php

use Illuminate\Support\Facades\Route;
//use
use App\Http\Controllers\FirstController;

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

Route::get('/test', function () {
    return "test";
});

Route::get('/test/{name}', function ($name) {
    return $name;
});

Route::get('/user/{name?}', function ($name = null) {
    return $name;
});
//Route view
// if you need to return a view without needing the controller
Route::view('/welcome', 'welcome');

// starting your first application
Route::get("/firstcontroller",
    [FirstController::class,"testController"]);

Route::get("/myfunction/{operator}",
    [FirstController::class,"myfunction"]);

Route::get("/myview",
    [FirstController::class,"returnView"]);

Route::get("/sendparamtoview",
    [FirstController::class,"sendparamtoview"]);

Route::get("/iti",[FirstController::class, "testtemplate"]);
