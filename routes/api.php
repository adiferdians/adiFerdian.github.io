<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

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

Route::post('about/submit/{id}', [AdminController::class, 'aboutSubmit']);
Route::post('about/sentDetil', [AdminController::class, 'detiltSubmit']);
Route::post('about/delDetil', [AdminController::class, 'detilDelete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
