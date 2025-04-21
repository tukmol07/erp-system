<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\EmploymentRecord;
use Illuminate\Http\Request;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function index()
    {
        return view('hr.payroll.index');
    }

    public function create()
    {
        $employees = EmploymentRecord::all();

        return view('hr.payroll.create', compact('employees'));
    }

    public function store(request $request)
    {
        $request->validated([
            'employee_id' => 'required|exists:employment_records,id',
            'month' => 'required|string',
            'basic_salary' => 'required|numeric',
            'allowances' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'overtime_hours' => 'nullable|numeric',
            'overtime_rate' => 'nullable|numeric',
            'net_salary' => 'required|numeric',
            'remarks' => 'nullable|string',
        ]);

        Payroll::create($request->all());

        return redirect()->route('hr.payroll.index')->with('success', 'Payroll record created successfully.');
    }
}
