<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

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
 
Route::get('/', [IndexController::class, 'index']);
Route::get('/l0g1n', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'auth']);


Route::get('admin', [AdminController::class, 'index']);
Route::get('about', [AdminController::class, 'about']);
Route::get('project', [AdminController::class, 'project']);
Route::get('resume', [AdminController::class, 'resume']);
Route::get('service', [AdminController::class, 'service']);