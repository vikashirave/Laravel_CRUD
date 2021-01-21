<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [studentController::class, 'list']);
Route::get('list', [studentController::class, 'list']);
Route::get('delete/{id}', [studentController::class, 'delete']);
Route::get('edit/{id}', [studentController::class, 'showData']);
Route::post('edit/', [studentController::class, 'update']);
Route::view('add', 'addstudent');
Route::post('add', [studentController::class, 'addData']);