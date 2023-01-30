<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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

Route::get('/', [EmailController::class, 'index']);
Route::get('/email/{email}', [EmailController::class, 'show']);
Route::post('/sendEmail', [EmailController::class, 'sendEmail']);
Route::post('/generateEmailFile', [EmailController::class, 'generateEmailFile']);
Route::get('/removeClass', [EmailController::class, 'removeClassForm']);
Route::post('/removeClass', [EmailController::class, 'removeClassForm']);
