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
//change to begin later
Route::get('begin',[StudentController::class, 'begin']);
Route::post('enter-grades',[StudentController::class, 'enterGrades']);
Route::post('compute-grades',[StudentController::class, 'computeGrades']);

//Route::get('start',[StudentController::class, 'start']);
//Route::post('enter-attempts',[StudentController::class, 'enterAttempts']);
//Route::post('compute-power',[StudentController::class, 'computePower']);
