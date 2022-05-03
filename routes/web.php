<?php

use App\Http\Controllers\PetsController;
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
Route::get('/read', [PetsController::class, 'readPets']);
Route::get('/create-from', [PetsController::class, 'createFrom']);
Route::post('/create', [PetsController::class, 'create']);
Route::get('/update-from/{id}', [PetsController::class, 'updateFrom']);
Route::post('/update', [PetsController::class, 'update']);
Route::get('/delete/{id}', [PetsController::class, 'delete']);


