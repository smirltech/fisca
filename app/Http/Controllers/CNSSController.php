<?php

namespace App\Http\Controllers;

use App\Models\CNSSData;
use App\Models\Employee;
use Illuminate\Http\Request;

class CNSSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'social_security_number' => 'required',
            'type_of_worker' => 'required|numeric',
            'contributed_amount' => 'required|numeric',
            'number_of_workdays' => 'required|numeric',
            'number_of_work_hours' => 'required|numeric',
            'gross_taxable_amount' => 'required|numeric',
            'contributed_period' => 'required|date',
            'employee_id' => 'required|numeric|exists:employees,id',
        ]);

        CNSSData::create($validator);

        return redirect()->route('cnss')->with('success', 'CNSS data created successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('cnss.create', compact('employees'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
