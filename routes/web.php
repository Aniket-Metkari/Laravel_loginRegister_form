<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;

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
    // return redirect("aboutpath");
});

// Route::view("/aboutpath",'about');
// Route::view("/contactpath",'contact');
Route::view('/add','aniket');
Route::post('/add',[registercontroller::class,'adddata']);
Route::view('/addlogin','contact');
Route::post('/addlogin',[registercontroller::class,'login']);

