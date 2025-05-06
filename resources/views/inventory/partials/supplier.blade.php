
<form action="{{ route('inventory.suppliers.store') }}" method="POST" class="p-4 mb-4 bg-white rounded shadow">
    @csrf
    <h2 class="mb-2 text-lg font-semibold">Add Supplier</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
        <input type="text" name="name" placeholder="Supplier Name"
               class="w-full px-4 py-2 border rounded" required>

        <input type="email" name="contact" placeholder="Email"
               class="w-full px-4 py-2 border rounded">

        <input type="text" name="phone" placeholder="Phone"
               class="w-full px-4 py-2 border rounded">

        <div class="md:col-span-3">
            <button type="submit"
                    class="px-4 py-2 text-white bg-green-600 rounded hover:bg-green-700">
                Add Supplier
            </button>
        </div>
    </div>
</form>
