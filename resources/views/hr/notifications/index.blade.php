@extends('layouts.app')

@section('content')
<div class="container max-w-3xl p-6 mx-auto bg-white rounded shadow">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold">HR Notifications</h2>
        <a href="{{ route('hr.dashboard') }}"
        class="px-4 py-2 text-black transition bg-blue-600 rounded hover:bg-blue-700">
            ← Back to Dashboard
        </a>

    </div>


    @forelse ($notifications as $notification)
        <div class="flex items-center justify-between p-4 mb-2 bg-yellow-100 border-l-4 border-yellow-500 rounded">
            <span>{{ $notification->data['message'] }}</span>
            <form action="{{ route('hr.hr.notifications.read', $notification->id) }}" method="POST">
                @csrf
                <button class="text-sm text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    Mark as Read
                </button>
                            </form>
        </div>
    @empty
        <p class="text-gray-600">You have no unread notifications.</p>
    @endforelse
</div>
@endsection
