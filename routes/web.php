<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\Employee;
use App\Http\Middleware\IsAdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('student', StudentController::class);

});

Route::middleware(['auth','permission'])->group(function () {
    Route::resource('company', CompanyController::class);
    Route::resource('employee', EmployeeController::class);
   
});















// Route::withoutMiddleware(Employee::class)->group(function () {
//     Route::resource('company', CompanyController::class);
// });

// Route::group(['middleware' => 'auth'], function(){
//             Route::group([
//                         'prefix' => 'company',
//                         'middleware' => 'is_admin',
//                         'as' => 'admin.',
//             ], function()
//             {
     
//             });
//       Route::group([
//                         'prefix' => 'company',
//                         'middleware' => 'is_admin',
//                         'as' => 'admin.',
//             ], function()
//             {
    
//});
 

//  
require __DIR__.'/auth.php';
