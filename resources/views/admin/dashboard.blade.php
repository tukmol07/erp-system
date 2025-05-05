@extends('layouts.app')

@section('content')

    {{-- Success Message --}}
    @if(session('success'))
        <div class="p-3 mb-4 text-green-800 bg-green-100 border border-green-300 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Register Button --}}
    <div class="mt-4 mb-6">
        <a
            href="{{ route('admin.register') }}"
            class="px-3 py-1 text-white bg-green-600 rounded-md hover:bg-green-700">
            ➕ Add User
        </a>
    </div>

    {{-- Users Table --}}
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-700 bg-white border border-gray-200 rounded-lg shadow">
            <thead class="text-xs text-black uppercase bg-gray-300">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                    <tr class="border-t hover:bg-green-50">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2 capitalize">{{ $user->role }}</td>
                        <td class="px-4 py-2">{{ $user->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('admin.edit', $user->id) }}"
                                class="inline-block px-3 py-1 text-sm font-semibold text-white bg-green-600 rounded-md hover:bg-green-700">Edit</a>

                             <form action="{{ route('admin.destroy', $user->id) }}" method="POST"
                                   class="inline-block" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit"
                                         class="px-3 py-1 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-red-700">Delete</button>
                             </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
