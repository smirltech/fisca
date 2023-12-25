<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function compute(Request $request)
    {
//  DB:: enployee
        $employees = DB::table('employees')->get();
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            /*'start_date' => 'required|date',
            'end_date' => 'required|date',*/
        ]);

        $employee = Employee::find($request->employee_id);

        return view( 'salary', [
            'salary' => $employee->salary,
        ]);

        /*$employee = Employee::find($request->employee_id);

        $salary = $employee->salary;

        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);

        $days = $start_date->diffInDays($end_date) + 1;

        $salary_per_day = $salary / 22;

        $salary = $salary_per_day * $days;

        $public_holidays = PublicHoliday::whereBetween('date', [
            $start_date->format('Y-m-d'),
            $end_date->format('Y-m-d'),
        ])->get();

        foreach ($public_holidays as $public_holiday) {
            if ($public_holiday->date->isWeekday()) {
                $salary -= $salary_per_day;
            }
        }

        return response()->json([
            'salary' => $salary,
        ]);*/
    }

    public function compute_journaly(Request $request) {

        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            /*'start_date' => 'required|date',
            'end_date' => 'required|date',*/
        ]);

        $employee = Employee::find($request->employee_id);
        $journaly_salary = $employee->salary / 26;

        return view('journaly_salary', [
            'journaly_salary' => $journaly_salary,
        ]);
    }
}