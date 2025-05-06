<?php

namespace App\Http\Controllers\Inventory;

use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{

    public function index(Request $request)
    {
        $query = Item::with(['category', 'supplier']);

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filter == 'low_stock') {
            $query->whereColumn('quantity', '<=', 'min_stock');
        } elseif ($request->filter == 'out_of_stock') {
            $query->where('quantity', '=', 0);
        }

        $items = $query->paginate(10);

        $categories = Category::all();

        return view('inventory.items.index', compact('items', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('inventory.items.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'quantity' => 'required|integer|min:0',
            'min_stock' => 'required|integer|min:0',
            'last_purchase_date' => 'nullable|date',
        ]);

        Item::create($validated);

        return redirect()->route('inventory.dashboard')->with('success', 'Item added successfully.');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('inventory.items.edit', compact('item', 'categories', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('inventory.dashboard')->with('success', 'Item updated successfully.');
    }
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('inventory.dashboard')->with('success', 'Item deleted successfully.');
    }
}
