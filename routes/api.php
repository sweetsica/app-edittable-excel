<?php

use App\Http\Controllers\HumanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Api\ReportController;

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

Route::post('/human',[HumanController::class,'update'])->name('human.update');
Route::post('/task',[TaskController::class,'update'])->name('task.update');

Route::get('/report/getfile', [ReportController::class, 'getFile']);

Route::post('/report/upload',[ReportController::class,'store']);
Route::post('/report/upload2',[ReportController::class,'store2']);
