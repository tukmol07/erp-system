<?php

namespace App\Http\Controllers\Inventory;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryDashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Item::query();

        // Search by name or SKU
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('sku', 'like', "%{$search}%")
                    ->orWhere('serial_number', 'like', "%{$search}%");
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category_id', $request->input('category'));
        }

        // Filter by stock status
        if ($request->filter === 'low_stock') {
            $query->whereColumn('quantity', '<=', 'min_stock')->where('quantity', '>', 0);
        } elseif ($request->filter === 'out_of_stock') {
            $query->where('quantity', '=', 0);
        }

        $items = $query->with(['category', 'supplier'])->latest()->paginate(10);
        $categories = Category::all();

        return view('inventory.dashboard', compact('items', 'categories'));
    }
}
