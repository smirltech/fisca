<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\OverTime;
use Illuminate\Http\Request;

class OverTimeController extends Controller
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
        return view('over_times.create', compact('employee_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $employee_id)
    {
        Employee::findOrFail($employee_id);

        $validated = $request->validate([
            'date' => 'required|date',
            'hours' => 'required|integer',
            'reason' => 'required|string',
        ]);

        $validated['employee_id'] = $employee_id;

        OverTime::create($validated);

        return redirect()->route('salary.details', ['employee_id' => $employee_id])->with('success', 'Over time created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OverTime $overTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OverTime $overTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OverTime $overTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OverTime $overTime)
    {
        //
    }
}
