<?php

use App\Http\Controllers\forminputController;
use App\Http\Controllers\ViewController;
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


//VIEW
Route::get('/',[ViewController::class,'main']);
Route::get('/admin',[forminputController::class,'index']);

//CRUD
Route::get('/add_form',[ViewController::class,'add_pasien']);