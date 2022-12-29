<?php

use App\Http\Controllers\StudentController;
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


Route::post('Insert',[StudentController::class,'Create']);

Route::post('Update/{id}',[StudentController::class,'update']);

Route::get('delete/{id}',[StudentController::class,'Delete']);

Route::get('index',[StudentController::class,'Index']);

Route::get('edit/{id}',[StudentController::class,'Edit']);

Route::get('detail/{id}',[StudentController::class,'Detail']);
