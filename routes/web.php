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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/main', [App\Http\Controllers\HomeController::class, 'main'])->name('main');


Route::middleware(['auth', 'is_admin'])->group(function() {
    Route::resource('/department', App\Http\Controllers\DepartmentController::class);
    // Route::resource('/employee', App\Http\Controllers\EmployeeController::class);
     Route::put('/admin/update', [App\Http\Controllers\EmployeeController::class,'update'])->name('admin.update');
    //   Route::put('/employe', [App\Http\Controllers\EmployeeController::class,'update'])->name('admin.update');

});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');



Route::group(['middleware' => ['employee', 'auth']], function() {
    Route::get('/leave',[App\Http\Controllers\LeaveController::class, 'index']); 
    Route::post('/leave',[App\Http\Controllers\LeaveController::class,'store'])->name('leave.store'); 
     Route::put('/employe', [App\Http\Controllers\EmployeeController::class,'update'])->name('employee.update');
});


