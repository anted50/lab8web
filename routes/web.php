<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/search', function () {
    return view('search');
});
Route::get('/', [StudentController::class, 'StudentList']);
Route::get('/student/{id}', [StudentController::class, 'getById']);
Route::get('search', [StudentController::class, 'search']);

Route::post('search', [StudentController::class, 'doSearch']);

Route::get('/account', [BankController::class, 'accountIndex']);
Route::get('/transaction', function(){
    return view('account.transaction');
});
Route::post('/transaction', [BankController::class, 'Transaction']);
Route::get('/account/{id}', [BankController::class, 'getById']);