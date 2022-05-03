<?php

use App\Http\Controllers\AccountController;
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
Route::get('/read', [AccountController::class, 'readAccounts']);
Route::get('/create-from', [AccountController::class, 'createFrom']);
Route::post('/create', [AccountController::class, 'create']);
Route::get('/update-from/{id}', [AccountController::class, 'updateFrom']);
Route::post('/update', [AccountController::class, 'update']);
Route::get('/delete/{id}', [AccountController::class, 'delete']);


