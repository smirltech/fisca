<?php

use App\Http\Controllers\EmployeeBulletinController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//
//Route::get('/compute_salary', [\App\Http\Controllers\SalaryController::class, 'compute'])->name('compute_salary');
//Route::get('/compute_journaly', [\App\Http\Controllers\SalaryController::class, 'compute_journaly'])->name('compute_journaly');
Route::middleware('auth')->group(function () {
    //Employees
    Route::get('/', [EmployeeController::class, 'index'])->name('index');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employees.store');

    //Details of employee
    Route::get('/details/employees/{employee_id}', [SalaryController::class, 'details'])->name('salary.details');
    //Route::get('/ComputeHourlySalary', [SalaryController::class, 'ComputeHourlySalary'])->name('ComputeHourlySalary');
    Route::get('/pay/employees/{employee_id}', [SalaryController::class, 'pay'])->name('pay.employee');

    //Bulletin
    Route::get('/bulletin/employees/{employee_id}', [EmployeeBulletinController::class, 'index'])->name('bulletin');
    Route::get('/bulletin/download/employee/{employee_id}', [EmployeeBulletinController::class, 'download'])->name('bulletin.download');
});
