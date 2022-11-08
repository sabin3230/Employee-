<?php

use App\Http\Controllers\LeaveController;
use App\Mail\UpdateEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/main', [App\Http\Controllers\HomeController::class, 'main']);



Route::middleware(['auth', 'is_admin'])->group(function() {

    
    Route::get('/maindashboard', [App\Http\Controllers\AdminController::class,'index']);
     Route::get('/dashboard', [App\Http\Controllers\AdminController::class,'index']);

    Route::get('/leaveadmin', [App\Http\Controllers\AdminController::class,'applyleave'])->name('leavadmin');

    Route::post('/approve/{id}',[App\Http\Controllers\AdminController::class,'approved'])->name('admin.approved');
    Route::post('/rejected/{id}', [App\Http\Controllers\AdminController::class,'rejected'])->name('admin.rejected');

    Route::resource('/department', App\Http\Controllers\DepartmentController::class);
    // Route::resource('/employee', App\Http\Controllers\EmployeeController::class);
    
    Route::get('/employee', [App\Http\Controllers\EmployeeController::class,'index'])->name('employee.index');
    Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class,'create'])->name('employee.create');
    Route::get('employee/show/{id}',[App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show');
    Route::get('employee/{id}/edit',[App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('employee',[App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
    Route::delete('employee/{id}',[App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');

});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');



Route::group(['middleware' => ['employee', 'auth']], function() {
    Route::get('/leave',[App\Http\Controllers\LeaveController::class, 'index']); 
    Route::post('/leave',[App\Http\Controllers\LeaveController::class,'store'])->name('leave.store'); 
    Route::get('user/show/{id}',[App\Http\Controllers\AdminController::class, 'profileupdate'])->name('user.show');

    Route::put('user/{id}',[App\Http\Controllers\AdminController::class, 'update'])->name('user.update');

});



Route::get('sendmail', function(){
    $maildata = [
        'name' => "ekana",
        'message' => 'updated'
    ];

    mail::to("saveen.man3230@gmail.com")->send(new UpdateEmail($maildata));
});



