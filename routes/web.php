<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/welcome/{name?}/{id}', function ($name=null,$id=null) {
    dd('Welcome '.$name);
});

Route::get('/hello/{name?}', [HelloController::class, 'welcome']);
Route::get('/goat/{first_name}', [HelloController::class, 'showText']);
