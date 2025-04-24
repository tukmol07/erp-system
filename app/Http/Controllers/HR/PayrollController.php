<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\EmploymentRecord;
use App\Models\Payroll;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls = Payroll::with('employee')->paginate(10);
        return view('hr.payroll.index', compact('payrolls'));
    }

    public function create()
    {
        $employees = EmploymentRecord::all(); // Fetch all employees
        return view('hr.payroll.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'employee_id' => 'required|exists:employment_records,id',
            'month' => 'required|string',
            'basic_salary' => 'required|numeric',
            'allowances' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'bonus' => 'nullable|numeric',
            'overtime_hours' => 'nullable|numeric',
            'remarks' => 'nullable|string',
        ]);

        $data['allowances'] = $data['allowances'] ?? 0;
        $data['deductions'] = $data['deductions'] ?? 0;
        $data['bonus'] = $data['bonus'] ?? 0;
        $data['overtime_hours'] = $data['overtime_hours'] ?? 0;

        $data['overtime_rate'] = ($data['basic_salary'] / 173.33) * 1.5;
        $data['overtime_pay'] = $data['overtime_hours'] * $data['overtime_rate'];

        $data['net_salary'] = $data['basic_salary'] + $data['allowances'] + $data['bonus'] + $data['overtime_pay'] - $data['deductions'];

        Payroll::create($data);

        return redirect()->route('hr.payroll.index')->with('success', 'Payroll record created successfully.');
    }

    public function edit($id)
    {
        $payroll = Payroll::findOrFail($id);
        $employees = EmploymentRecord::all();
        return view('hr.payroll.edit', compact('payroll', 'employees'));
    }

    public function destroy($id)
    {
        $payroll = Payroll::findOrFail($id);
        $payroll->delete();

        return redirect()->route('hr.payroll.index')->with('success', 'Payroll record deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $data = $request->validate([
            'employee_id' => 'required|exists:employment_records,id',
            'month' => 'required|string',
            'basic_salary' => 'required|numeric',
            'allowances' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'overtime_hours' => 'nullable|numeric',
            'bonus' => 'nullable|numeric',
            'net_salary' => 'required|numeric',
            'remarks' => 'nullable|string',
        ]);

        // Debugging: Check if the data is valid
        dd($data);

        // Find the payroll record by ID
        $payroll = Payroll::findOrFail($id);

        // Update the payroll record
        $payroll->update($data);

        // Redirect back with success message
        return redirect()->route('hr.payroll.index')->with('success', 'Payroll record updated successfully.');
    }
}
