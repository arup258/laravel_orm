<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;

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

Route::get('add_data',[OneToOneController::class,'add']);
Route::get('get_mobile/{id}',[OneToOneController::class,'getMobile']);
Route::get('get_customet/{id}',[OneToOneController::class,'getCustomer']);
Route::get('all_data/{id}',[OneToOneController::class,'alldata']);

//*******one to meny controller */

Route::get('/add_author',[OneToManyController::class,'addauthor']);
Route::get('/add_post/{id}',[OneToManyController::class,'addpost']);
// show post by author
Route::get('/show_post/{id}',[OneToManyController::class,'showpost']);
// show author by post
Route::get('/show_author/{id}',[OneToManyController::class,'showauthor']);
Route::get('/all_author_post/{id}',[OneToManyController::class,'showauthor']);
