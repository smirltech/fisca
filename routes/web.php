<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [EmployeeController::class, 'index'])->name('index');

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

//ComputeDailySalary
Route::get('/ComputeDailySalary', [\App\Http\Controllers\SalaryController::class, 'ComputeDailySalary'])->name('ComputeDailySalary');
Route::get('/ComputeHourlySalary', [\App\Http\Controllers\SalaryController::class, 'ComputeHourlySalary'])->name('ComputeHourlySalary');
