<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\Frontcontroller;

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

//*******one to many controller */

Route::get('/add_author',[OneToManyController::class,'addauthor']);
Route::get('/add_post/{id}',[OneToManyController::class,'addpost']);
// show post by author
Route::get('/show_post/{id}',[OneToManyController::class,'showpost']);
// show author by post
Route::get('/show_author/{id}',[OneToManyController::class,'showauthor']);
Route::get('/all_author_post/{id}',[OneToManyController::class,'showauthor']);






//templete cutting
Route::get('/home', [Frontcontroller::class,"home"])->name('user.home');
Route::get('/gallery', [Frontcontroller::class,"gallery"])->name('user.gallery');
Route::get('/course', [Frontcontroller::class,"course"])->name('user.course');
Route::get('/course_details', [Frontcontroller::class,"course_details"])->name('user.course_details');
Route::get('/blog', [Frontcontroller::class,"blog"])->name('user.blog');
Route::get('/contact', [Frontcontroller::class,"contact"])->name('user.contact');
Route::get('/blog_single',[Frontcontroller::class,"blog_single"])->name('user.blog_single');
Route::get('/error',[Frontcontroller::class,"error"])->name('user.error');
