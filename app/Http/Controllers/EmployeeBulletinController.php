<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Dompdf\Dompdf;
use Faker\Factory;
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

    private function getView($employee, $download = false)
    {
        $full_name = $employee->first_name . ' ' . $employee->last_name . ' ' . $employee->middle_name;

        $social_security_number = DB::table('cnss_data')->where('employee_id', '=', $employee->id)->first()?->social_security_number ?? 'N/A';

        // Base salary computation
        $salary = $this->getBaseSalary($employee);

        // Base remuneration computation
        $overtimes = $this->getOvertimes($employee, $salary);

        // Supplements and Bonus computation
        $supp_and_bonus = $this->getSupplementsAndBonus($salary);

        // Avantages et absences
        $avantages_et_absences = $this->getAvantagesEtAbsences($salary);

        // Total gross due
        $total_gross_due = $this->getTotalGrossDue($salary, $overtimes, $supp_and_bonus, $avantages_et_absences);

        // Deductions
        $deductions = $this->getDeductions($salary);

        // Family allowance
        $family_allowance = $this->getFamilyAllowance($salary);

        // Net pay
        $net_pay = $this->getNetPay($total_gross_due, $deductions, $family_allowance);

        // INSS contribution base
        $inss_contribution_base = $this->getINSSContributionBase($salary, $overtimes, $supp_and_bonus, $avantages_et_absences);

        return view(
            'employee-bulletin',
            compact(
                'full_name',
                'download',
                'employee',
                'social_security_number',
                'salary',
                'overtimes',
                'supp_and_bonus',
                'avantages_et_absences',
                'total_gross_due',
                'deductions',
                'family_allowance',
                'net_pay',
                'inss_contribution_base'
            )
        );
    }

    private function getBaseSalary($employee)
    {
        $salary = new stdClass();
        $salary->hourly = $employee->base_salary;
        $salary->numberOfHours = 26 * 8;
        $salary->total = $salary->numberOfHours * $salary->hourly;

        return $salary;
    }

    private function getOvertimes($employee, $salary)
    {
        $overtimes = new stdClass();
        $overtimes->nbOfHours = SalaryController::getTotalHoursOfOvertimeOfThisMonth($employee->id);
        $coef = 0.01;
        $overtimes->rate = $salary->hourly * $coef * 100;
        $overtimes->total = $overtimes->nbOfHours * $overtimes->rate;

        return $overtimes;
    }

    public function getSupplementsAndBonus($salary)
    {
        $supp_and_bonus = new stdClass();
        $coef = 0.003;
        $supp_and_bonus->weekEnd = $salary->hourly * $coef * 100;
        $supp_and_bonus->divers = $salary->hourly * $coef * 100;
        $coef = 0.005;
        $supp_and_bonus->primes = $salary->hourly * $coef * 100;
        $supp_and_bonus->total = $supp_and_bonus->weekEnd + $supp_and_bonus->divers + $supp_and_bonus->primes;

        return $supp_and_bonus;
    }

    public function getAvantagesEtAbsences($salary)
    {
        $avantages_et_absences = new stdClass();
        $avantages_et_absences->paid_leave_days = 26;
        $avantages_et_absences->paid_leave_rate = $salary->hourly;
        $avantages_et_absences->paid_leave_total = $avantages_et_absences->paid_leave_days * $avantages_et_absences->paid_leave_rate * 8;

        $faker = new Factory();

        $avantages_et_absences->sickness_or_accident_days = $faker::create()->numberBetween(0, 26);
        $avantages_et_absences->sickness_or_accident_rate = $salary->hourly * 0.7 * 8;
        $avantages_et_absences->sickness_or_accident_total = $avantages_et_absences->sickness_or_accident_days * $avantages_et_absences->sickness_or_accident_rate;

        return $avantages_et_absences;
    }

    public function getTotalGrossDue($salary, $overtimes, $supp_and_bonus, $avantages_et_absences)
    {
        $total_gross_due = new stdClass();
        $total_gross_due->total = $salary->total + $overtimes->total + $supp_and_bonus->total + $avantages_et_absences->paid_leave_total + $avantages_et_absences->sickness_or_accident_total;

        return $total_gross_due;
    }

    public function getDeductions($salary)
    {
        $deductions = new stdClass();
        $deductions->pension = $salary->total * 0.03;
        $deductions->compensation = $salary->total * 0.01;
        $deductions->advances = $salary->total * 0.01;
        $deductions->other = $salary->total * 0.01;
        $deductions->tax = $salary->total * 0.01;
        $deductions->total = $deductions->pension + $deductions->compensation + $deductions->advances + $deductions->other + $deductions->tax;

        return $deductions;
    }

    public function getFamilyAllowance($salary,)
    {
        $faker = new Factory();
        $family_allowance = new stdClass();
        $family_allowance->children_beneficiary_count = $faker::create()->numberBetween(0, 10);
        $family_allowance->days = $faker::create()->numberBetween(0, 26);
        $family_allowance->rate = $salary->hourly * 0.2 * 8;
        $family_allowance->total = $family_allowance->days * $family_allowance->rate * $family_allowance->children_beneficiary_count;

        return $family_allowance;
    }

    public function getNetPay($total_gross_due, $deductions, $family_allowance)
    {
        $net_pay = new stdClass();
        $net_pay->total = $total_gross_due->total - $deductions->total + $family_allowance->total;

        return $net_pay;
    }

    public function getINSSContributionBase($salary, $overtimes, $supp_and_bonus, $avantages_et_absences)
    {
        $inss_contribution_base = new stdClass();
        $inss_contribution_base->total = $salary->total + $overtimes->total + $supp_and_bonus->total + $avantages_et_absences->paid_leave_total + $avantages_et_absences->sickness_or_accident_total;

        return $inss_contribution_base;
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
        $dompdf->setPaper('A5','portrait');

        $dompdf->render();
        $dompdf->stream(strtolower($employee->full_name) .'bulletin', ['Attachment' => true]);
    }
}
