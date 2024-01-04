<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Dompdf\Dompdf;

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
                'employee'
            )
        );
    }
}
