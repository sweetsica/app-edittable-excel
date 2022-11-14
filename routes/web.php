<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\HumanController;
use App\Http\Controllers\CustomerDMSController;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Session;
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
    return view('login');
})->name('login');
Route::post('/login-check',[HumanController::class,'loginCheck'])->name('login.check');
Route::get('/logout',function (){
    Session::flush();
    return redirect()->route('login');
})->name('logout');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/nhap', [ExcelController::class,'getImportView']);
Route::post('/nhap-luu', [ExcelController::class,'setImport'])->name('excel.import');
Route::post('/nhap-luu-dms-buon', [ExcelController::class,'setImportDMS'])->name('excel.import.dms.buon');
Route::post('/nhap-luu-dms-le', [ExcelController::class,'setImportDMS'])->name('excel.import.dms.le');
Route::post('/nhap-luu-nhiem-vu', [ExcelController::class,'setImportTask'])->name('excel.import.task');


Route::get('/human-list',[HumanController::class,'index'])->name('human.list');
Route::get('/customer-dms-list',[CustomerDMSController::class,'index'])->name('customerdms.list');

Route::get('/task-list',[TaskController::class,'index'])->name('task.list');
Route::post('/task-add',[TaskController::class,'store'])->name('task.add');
Route::get('/task-export',[TaskController::class,'export'])->name('task.export');
