<?php

namespace App\Http\Controllers\HR;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\EmploymentRecord;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class EmploymentRecordController extends Controller
{
    public function create()
    {
        return view('hr.employment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_name' => 'required|string|max:255',
            'employee_number' => 'required|string|max:50',
            'visa_number' => 'required|string|max:50',
            'category_resident' => 'required|string|max:100',
            'resident_number' => 'required|string|max:100',
            'nationality' => 'required|string|max:100',
            'date_arrival' => 'required|date',
            'date_hired' => 'required|date',
            'contract_expiry_date' => 'required|date',
            'kiwa_contract_number' => 'required|string|max:100',
            'salary' => 'required|numeric',
            'educational_background' => 'nullable|string',
            'skills' => 'nullable|string',
            'ticket_provided' => 'required|string',
            'residence_renewal' => 'required|integer',
        ]);

        $record = EmploymentRecord::create($request->all());

        return redirect()->route('hr.employment.index')->with('success', 'Employment record added.');
    }

    public function index(Request $request)
    {
        $query = EmploymentRecord::query();

        if ($search = $request->input('search')) {
            $query->where('employee_name', 'like', "%{$search}%");
        }

        $records = $query->get();

        $sorted = $records->sortBy(function ($record) {
            $expiryDate = Carbon::parse($record->contract_expiry_date);

            if ($expiryDate->isPast()) {
                return PHP_INT_MAX;
            }

            return now()->diffInDays($expiryDate);
        })->values();


        $perPage = 10;
        $currentPage = request()->get('page', 1);
        $currentItems = $sorted->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginated = new LengthAwarePaginator(
            $currentItems,
            $sorted->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('hr.employment.index', ['records' => $paginated]);
    }



    public function edit($id)
    {
        $record = EmploymentRecord::findOrFail($id);
        return view('hr.employment.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $record = EmploymentRecord::findOrFail($id);

        $validated = $request->validate([
            'employee_name' => 'required|string|max:255',
            'employee_number' => 'required|string|max:100',
            'visa_number' => 'required|string',
            'category_resident' => 'required|string',
            'resident_number' => 'required|string',
            'nationality' => 'required|string',
            'date_arrival' => 'required|date',
            'date_hired' => 'required|date',
            'contract_expiry_date' => 'required|date',
            'kiwa_contract_number' => 'required|string',
            'salary' => 'required|numeric',
            'educational_background' => 'nullable|string',
            'skills' => 'nullable|string',
            'ticket_provided' => 'required|boolean',
            'residence_renewal' => 'required|integer',
        ]);

        $record->update($validated);

        return redirect()->route('hr.hr.employment.index')->with('success', 'Record updated successfully.');
    }

    public function destroy($id)
    {
        $record = EmploymentRecord::findOrFail($id);
        $record->delete();

        return redirect()->route('hr.employment.index')
            ->with('success', 'Employment record deleted successfully.');
    }
}
