<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function compute(Request $request)
    {
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

    public function ComputeSalary(Request $request){
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
        ]);

        $employee = Employee::find($request->employee_id);

        if (is_null($employee)) {
            abort(404, 'Employee not found');
        }

        $monthly_salary = $employee->salary;
        $daily_salary = $monthly_salary / 26;
        $hourly_salary = $monthly_salary / 26 / 8;

        $full_name = $employee->full_name;

        $overtimes = DB::table('over_times')->where('employee_id', $employee->id)->get();

        $total_hours_of_overtime_of_this_month = $this->getTotalHoursOfOvertimeOfThisMonth($employee->id);
        $salary_to_be_payed = $this->overtime_salary($hourly_salary, $total_hours_of_overtime_of_this_month);

        return view('salary', [
            'daily_salary' => $daily_salary,
            'hourly_salary' => $hourly_salary,
            'full_name' => $full_name,
            'overtimes' => $overtimes,
            'total_hours_of_overtime_of_this_month' => $total_hours_of_overtime_of_this_month,
            'salary_to_be_payed' => $salary_to_be_payed,
            'employee' => $employee,
        ]);
    }

    /*
     * Compute overtime salary of an employee
     * based on this formula:
     * overtime_salary = hourly_salary * number_of_hours
     *
     */
    public static function overtime_salary($hourly_salary, $number_of_hours){
        return $hourly_salary * $number_of_hours;
    }

    public static function getTotalHoursOfOvertimeOfThisMonth($employee_id){
        $overtimes = DB::table('over_times')
            ->where('employee_id', $employee_id)
            ->whereMonth('date', now()->month)
            ->pluck('hours')
            ->toArray();

        if (empty($overtimes)) {
            return 0;
        }

        return array_sum($overtimes);
    }

    public function pay($employee_id) {
        $employee = Employee::find($employee_id);

        if (is_null($employee)) {
            abort(404, 'Employee not found');
        }

        if (!$employee->payed) {
            Db::table('employees')
                ->where('id', $employee_id)
                ->update(["payed" => 1]);
        }

        return redirect()->route('ComputeDailySalary');

    }
}
