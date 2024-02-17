<?php

use App\Exports\CnssExport;
use App\Http\Controllers\CNSSController;
use App\Http\Controllers\EmployeeBulletinController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OverTimeController;
use App\Http\Controllers\PaySlipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

    //CNSS
    Route::get('/employees/{employee_id}/cnss/create', [CNSSController::class, 'create'])->name('cnss.create');
    Route::post('/employees/{employee_id}/cnss/store', [CNSSController::class, 'store'])->name('cnss.store');

    //PaySlip
    Route::get('/employees/{employee_id}/pay_slips/create', [PaySlipController::class, 'create'])->name('pay_slips.create');
    Route::post('/employees/{employee_id}/pay_slips/store', [PaySlipController::class, 'store'])->name('pay_slips.store');

    //OverTime
    Route::get('/employees/{employee_id}/over_times/create', [OverTimeController::class, 'create'])->name('over_times.create');
    Route::post('/employees/{employee_id}/over_times/store', [OverTimeController::class, 'store'])->name('over_times.store');
});

Route::get('/cnss/download', function ()
    {
        return Excel::download(new CnssExport, 'cnss.xlsx');
    }
)->name('cnss_all_download');

// Section_dashboard
Route::get('/personal',[SectionController::class, 'personnal'])->name('personal');
Route::get('/cnss',[SectionController::class, 'cnss'])->name('cnss');
Route::get('/onem',[SectionController::class, 'onem'])->name('onem');
Route::get('/ipr',[SectionController::class, 'ipr'])->name('ipr');
Route::get('/ifre',[SectionController::class, 'ifre'])->name('ifre');
Route::get('/inpp',[SectionController::class, 'inpp'])->name('inpp');
