<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaryToBePaid =  DB::table('employees')
            ->where('payed', '=', '0')
            ->sum('salary');

        $pendingAgent = DB::table('employees')
            ->where('payed', '=', '0')
            ->count('id');

        return view('index', [
            'employees' =>DB::table('employees')->paginate(10),
            'salaryToBePaid' => $salaryToBePaid,
            'pendingAgent' => $pendingAgent,
            'number_of_payed_agents' => DB::table('employees')->where('payed', '=', '1')->count('id'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'department' => 'required',
            'photo' => 'required|image',
            'matriculate' => 'required',
            'base_salary' => 'required|numeric',
            'payed' => 'required|boolean',
        ]);

        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'department' => 'required',
            'photo' => 'required|image',
            'matriculate' => 'required',
            'base_salary' => 'required|numeric',
            'payed' => 'required|boolean',
        ]);

       Employee::create($validate->all());

        return redirect()->route('employees.index');
    }


    /**
     * Store a newly created resource in storage.
     */
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

}
