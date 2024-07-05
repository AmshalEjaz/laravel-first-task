<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('delete/{id}',[HomeController::class, 'delete'])->name('delete');
Route::get('update/{id}',[HomeController::class, 'update'])->name('update');
Route::post('/updatecompany', [HomeController::class, 'updatecompany'])->name('updatecompany');
Route::post('insertData',[HomeController::class, 'insertData'])->name('insertData');
//employee
Route::get('/employee',[IndexController::class, 'employee'])->name('/employee');
Route::post('insertData',[IndexController::class, 'insertData'])->name('insertData');
Route::get('delete/{id}',[IndexController::class, 'delete'])->name('delete');
Route::get('updateEmployee/{id}',[IndexController::class, 'edit'])->name('edit');
Route::post('/update',[IndexController::class, 'update'])->name('update');

// Route::get('/', function () {
//     return view('welcome');
// });
