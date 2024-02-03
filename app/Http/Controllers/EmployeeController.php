<?php

namespace App\Http\Controllers;

use App\Mail\MailEmployee;
use App\Models\Employee;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaryToBePaid =  DB::table('employees')
            ->where('payed', '=', '0')->orderByDesc('id')
            ->sum('base_salary') + $this->getTotalOverTimesAmount();

        $pendingAgent = DB::table('employees')
            ->where('payed', '=', '0')
            ->count('id');

        return view('index', [
            'employees' =>DB::table('employees')->orderByDesc('id')->paginate(10),
            'salaryToBePaid' => $salaryToBePaid,
            'pendingAgent' => $pendingAgent,
            'number_of_payed_agents' => DB::table('employees')->where('payed', '=', '1')->count('id'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'order_number' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'department' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'base_salary' => 'required|numeric',
            'address' => 'required',
        ]);



        $validate['photo'] = $request->file('photo')->store('photos', 'public');
        $validate['matriculate'] = str(now()->year)->substr(2, 2) . str($validate['first_name'])->substr(0, 1)->upper() . str($validate['last_name'])->substr(0, 1)->upper() . str($validate['middle_name'])->substr(0, 1)->upper() . DB::table('employees')->latest('id')->first()->id + 1   ;
        $validate['payed'] = 0;

       Employee::create($validate);


        return redirect()->route('index')->with('success', 'Employee created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }

    public function getTotalOverTimesAmount() {
        $couples = DB::table('employees')
            ->join('over_times', 'employees.id', '=', 'over_times.employee_id')
            ->where('payed', '=', '0')
        ->get(['employees.base_salary', 'over_times.hours']);

        $amount = 0;
        foreach ($couples as $couple) {
            $amount += $couple->base_salary * $couple->hours;
        }
        return $amount;
    }

}
