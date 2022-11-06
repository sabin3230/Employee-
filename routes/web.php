<?php

use App\Http\Controllers\LeaveController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'is_admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/main', [App\Http\Controllers\HomeController::class, 'main'])->name('main');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');


Route::middleware(['auth', 'is_admin'])->group(function() {
    Route::resource('/department', App\Http\Controllers\DepartmentController::class);
    Route::resource('/employee', App\Http\Controllers\EmployeeController::class);

});

 Route::resource('/department', App\Http\Controllers\DepartmentController::class);
 Route::resource('/employee', App\Http\Controllers\EmployeeController::class);



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/leave',[App\Http\Controllers\LeaveController::class, 'index']); 
 Route::post('/leave-store',[App\Http\Controllers\LeaveController::class,'store'])->name('leave.store'); 


