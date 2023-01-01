<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tastList\listController;
use App\Http\Controllers\task\taskController;


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
    // tasksList
Route::get('list',[listController::class,'index']);
Route::post('list/store',[listController::class,'store']);
Route::post('list/update',[listController::class,'update']);
Route::post('list/delete',[listController::class,'destroy']);
    // tasks
Route::post('list/tasks/store',[taskController::class,'store']);
Route::get('list/tasks/{id}',[taskController::class,'index']);