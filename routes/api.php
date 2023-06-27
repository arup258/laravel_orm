<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController1;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student/create',[StudentController1::class, 'store']);
Route::get('/all/student',[StudentController1::class, 'allStudent']);
Route::get('/edit/student/{id}',[StudentController1::class, 'editStudent']);
Route::post('/update/student/{id}',[StudentController1::class, 'updateStudent']);
Route::get('/delete/student/{id}',[StudentController1::class, 'deleteStudent']);
