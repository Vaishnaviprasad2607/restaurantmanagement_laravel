<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\NewsController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get("/",[HomeController::class,'index']);
Route::get("/user",[HomeController::class,'redirect']);

Route::get('/cust',[AdminController::class,'cust']);
Route::get('/slider',[SliderController::class,'slider']);
Route::get('/botman',[BotManController::class,'handle']);
Route::post('/botman',[BotManController::class,'handle']);
Route::get('/news',[NewsController::class,'news']);
Route::get('/add-news',[NewsController::class,'create']);
Route::post('/store-news',[NewsController::class,'store']);
Route::get('/edit-news/{id}',[NewsController::class,'edit']);
Route::get('/delete-news/{id}',[NewsController::class,'delete']);
Route::put('/update-news/{id}',[NewsController::class,'update']);

Route::get('/add-slider',[SliderController::class,'create']);
Route::post('/store-slider',[SliderController::class,'store']);
Route::get('/edit-slider/{id}',[SliderController::class,'edit']);
Route::put('/update-slider/{id}',[SliderController::class,'update']);


Route::get("/redirect",[HomeController::class,'redirect'])->middleware('auth','verified');
Route::get("/contact",[HomeController::class,'contact']);
Route::get("/parallax",[HomeController::class,'parallax']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);
Route::get('/updatemenu/{id}',[AdminController::class,'updatemenu']);
Route::post('/editmenu/{id}',[AdminController::class,'editmenu']);
Route::post('/uploadfood',[AdminController::class,'uploadfood']);
Route::post('/reservation',[AdminController::class,'reservation']);
Route::get('/viewres',[AdminController::class,'viewres']);
