@extends('layouts.app')

@section('content')
<div class="min-h-screen p-6 bg-gray-100">
    <div class="max-w-6xl mx-auto">
        <h1 class="mb-8 text-3xl font-bold text-gray-800">Accounting Dashboard</h1>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">

            <!-- Example: Total Revenue -->
            <div class="p-6 bg-white shadow rounded-xl">
                <h2 class="text-lg font-semibold text-gray-700">Total Revenue</h2>
                <p class="mt-2 text-2xl font-bold text-green-600">$120,000</p>
            </div>

            <!-- Example: Total Expenses -->
            <div class="p-6 bg-white shadow rounded-xl">
                <h2 class="text-lg font-semibold text-gray-700">Total Expenses</h2>
                <p class="mt-2 text-2xl font-bold text-red-600">$75,000</p>
            </div>

            <!-- Example: Net Profit -->
            <div class="p-6 bg-white shadow rounded-xl">
                <h2 class="text-lg font-semibold text-gray-700">Net Profit</h2>
                <p class="mt-2 text-2xl font-bold text-blue-600">$45,000</p>
            </div>
        </div>

        <!-- Recent Transactions (example section) -->
        <div class="p-6 mt-10 bg-white shadow rounded-xl">
            <h3 class="mb-4 text-xl font-semibold text-gray-800">Recent Transactions</h3>
            <table class="w-full text-left border-collapse">
                <thead class="text-sm text-gray-600 border-b">
                    <tr>
                        <th class="pb-2">Date</th>
                        <th class="pb-2">Description</th>
                        <th class="pb-2">Amount</th>
                        <th class="pb-2">Type</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    <tr class="border-b">
                        <td class="py-2">2025-04-15</td>
                        <td>Invoice Payment</td>
                        <td class="text-green-600">+ $5,000</td>
                        <td>Credit</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2">2025-04-14</td>
                        <td>Office Rent</td>
                        <td class="text-red-600">- $2,000</td>
                        <td>Debit</td>
                    </tr>
                    <!-- Add more rows dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
