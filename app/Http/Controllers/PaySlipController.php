<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\PaySlip;
use Illuminate\Http\Request;

class PaySlipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($employee_id)
    {
        return view('pay_slips.create', compact('employee_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $employee_id)
    {
        Employee::findOrFail($employee_id);

        $validated = $request->validate([
            'cost_of_living_allowance' => 'required|integer',
            'bonus' => 'required|integer',
            'gratuity' => 'required|integer',
            'leave_allowance' => 'required|integer',
            'commission' => 'required|integer',
            'other_allowances' => 'required|integer',
            'fringe_benefit' => 'required|string',
        ]);

        $validated['employee_id'] = $employee_id;

        PaySlip::create($validated);

        return redirect()->route('salary.details', ['employee_id' => $employee_id])->with('success', 'Pay slip created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaySlip $PaySlip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaySlip $PaySlip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaySlip $PaySlip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaySlip $PaySlip)
    {
        //
    }
}
