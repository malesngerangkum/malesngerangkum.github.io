<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Index
Route::get('/', [PagesController::class, 'index']);

// Preview
Route::get('/{name}', [PagesController::class, 'preview']);

Route::get('/{name}/{id}', [PagesController::class, 'preview']);
