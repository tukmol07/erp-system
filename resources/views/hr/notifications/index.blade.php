@extends('layouts.app')

@section('content')
<div class="container max-w-3xl p-6 mx-auto bg-white rounded shadow">
    <h2 class="mb-4 text-2xl font-bold">HR Notifications</h2>

    @forelse ($notifications as $notification)
        <div class="flex items-center justify-between p-4 mb-2 bg-yellow-100 border-l-4 border-yellow-500 rounded">
            <span>{{ $notification->data['message'] }}</span>
            <form action="{{ route('hr.hr.notifications.read', $notification->id) }}" method="POST">
                @csrf
                <button class="px-3 py-1 text-sm text-white bg-green-600 rounded hover:bg-green-700">Mark as Read</button>
            </form>
        </div>
    @empty
        <p class="text-gray-600">You have no unread notifications.</p>
    @endforelse
</div>
@endsection
