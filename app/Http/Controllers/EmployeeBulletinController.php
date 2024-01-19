<?php

namespace App\Http\Controllers;

use App\Models\CNSSData;
use App\Models\Employee;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use stdClass;

class EmployeeBulletinController extends Controller
{

    public function index($employee_id)
    {
        $employee = Employee::find($employee_id);

        // If employee not found, return 404 error
        if (is_null($employee)) {
            abort(404, 'Employee not found');
        }

        return $this->getView($employee);
    }

    public function download($employee_id)
    {
        $employee = Employee::find($employee_id);

        // If employee not found, return 404 error
        if (is_null($employee)) {
            abort(404, 'Employee not found');
        }

        $view = $this->getView($employee, true)->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        $dompdf->setPaper('A5', 'portrait');

        $dompdf->render();
        $dompdf->stream(strtolower($employee->full_name) . 'bulletin.pdf', ['Attachment' => true]);
    }

    private function getView($employee, $download = false){
        $department = $employee->department;
        $full_name = $employee->first_name . ' ' . $employee->last_name . ' ' . $employee->middle_name;

        $hourly_salary = $employee->base_salary;
        $daily_salary = $hourly_salary * 8;
        $monthly_salary = $daily_salary * 26;

        $total_hours_of_overtime_of_this_month = SalaryController::getTotalHoursOfOvertimeOfThisMonth($employee->id);
        $overtime_salary = SalaryController::overtime_salary($hourly_salary, $total_hours_of_overtime_of_this_month);
        $total_salary = $monthly_salary + $overtime_salary;

        $social_security_number = DB::table('cnss_data')->where('employee_id', '=', $employee->id)->first()->social_security_number;

        // Base salary computation
        $salary = new stdClass();
        $salary->hourly = $employee->base_salary;
        $salary->numberOfHours = 26 * 8;
        $salary->total = $salary->numberOfHours * $salary->hourly;

        // Base remuneration computation
        $overtimes = new stdClass();
        $overtimes->nbOfHours = SalaryController::getTotalHoursOfOvertimeOfThisMonth($employee->id);
        $coef = 0.01;
        $overtimes->rate = $salary->hourly * $coef * 100;
        $overtimes->total = $overtimes->nbOfHours * $overtimes->rate;

        // Supplements and Bonus computation
        $supp_and_bonus = new stdClass();
        $coef = 0.003;
        $supp_and_bonus->weekEnd = $salary->hourly * $coef * 100;
        $supp_and_bonus->divers = $salary->hourly * $coef * 100;
        $coef = 0.005;
        $supp_and_bonus->primes = $salary->hourly * $coef * 100;
        $supp_and_bonus->total = $supp_and_bonus->weekEnd + $supp_and_bonus->divers + $supp_and_bonus->primes;

        // Avantages et absences





        return view(
            'employee-bulletin',
            compact(
                'full_name',
                'monthly_salary',
                'daily_salary',
                'hourly_salary',
                'overtime_salary',
                'total_hours_of_overtime_of_this_month',
                'total_salary',
                'department',
                'download',
                'employee',
                'social_security_number',
                'salary',
                'overtimes',
                'supp_and_bonus'
            )
        );
    }
}
