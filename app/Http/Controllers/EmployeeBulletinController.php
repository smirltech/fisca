<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeBulletinController extends Controller
{
    public function index($employee_id)
    {
        $employee = Employee::find($employee_id);
        $full_name = $employee->full_name;
        $monthly_salary = $employee->salary;
        $daily_salary = $monthly_salary / 26;
        $hourly_salary = $daily_salary / 8;
        $total_hours_of_overtime_of_this_month = SalaryController::getTotalHoursOfOvertimeOfThisMonth($employee->id);
        $overtime_salary = SalaryController::overtime_salary($hourly_salary, $total_hours_of_overtime_of_this_month);
        $total_salary = $monthly_salary + $overtime_salary;

        return view(
            'employee-bulletin',
            compact(
                'full_name',
                'monthly_salary',
                'daily_salary',
                'hourly_salary',
                'overtime_salary',
                'total_hours_of_overtime_of_this_month',
                'total_salary'
            )
        );
    }
}
