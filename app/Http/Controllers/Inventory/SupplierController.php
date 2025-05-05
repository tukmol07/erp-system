<?php

namespace App\Http\Controllers\Inventory;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::latest()->paginate(10);
        return view('inventory.suppliers.index', compact('suppliers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255'
        ]);

        Supplier::create([
            'company_name' => $request->company_name,
            'address' => $request->address,
            'email' => $request->email,
            'contact_person' => $request->contact_person,
            'contact_number' => $request->contact_number
        ]);

        return redirect()->route('inventory.suppliers.index')->with('success', 'Supplier added successfully');
    }

    public function create()
    {
        return view('inventory.suppliers.create');
    }

    public function edit(Supplier $supplier)
    {
        return view('inventory.suppliers.edit', compact('supplier'));
    }


    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255'
        ]);

        $supplier->update($request->all());

        return redirect()->route('inventory.suppliers.index')->with('success', 'Supplier updated successfully.');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('inventory.suppliers.index')->with('success', value: 'Supplier deleted successfully.');
    }
}
