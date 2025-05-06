@extends('layouts.app')

@section('content')
<div class="max-w-xl p-6 mx-auto mt-8 bg-white rounded shadow">
    <h2 class="mb-6 text-xl font-semibold text-gray-700">Edit User</h2>

    @if(session('success'))
        <div class="p-2 mb-4 text-indigo-700 bg-green-100 border border-indigo-300 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full px-3 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full px-3 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Role</label>
            <select name="role" class="w-full px-4 py-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                <option value="">-- Select Role --</option>
                @foreach($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                        {{ ucfirst($role->name) }}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 text-sm text-white bg-gray-600 rounded hover:bg-gray-700">Cancel</a>
            <button type="submit" class="px-4 py-2 text-sm text-white bg-indigo-600 rounded hover:bg-indigo-700">Update</button>
        </div>
    </form>
</div>
@endsection
