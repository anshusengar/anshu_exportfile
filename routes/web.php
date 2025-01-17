<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EmployeeController::class,'index']);

Route::get('/import-data', [EmployeeController::class,'importDataForm']);

Route::post('/import-data', [EmployeeController::class,'import']);

Route::get('/export-data', [EmployeeController::class,'exportData']);



