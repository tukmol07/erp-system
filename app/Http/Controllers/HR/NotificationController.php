<?php

namespace App\Http\Controllers\HR;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Auth::user()->unreadNotifications;
        return view('hr.notifications.index', compact('notifications'));
    }

    public function markAsRead($id)
    {
        $notification = Auth::user()->unreadNotifications()->findOrFail($id);
        $notification->markAsRead();

        return redirect()->back()->with('success', 'Notification marked as read.');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();
            dd($user->unreadNotifications);  // Dump the unread notifications to see if it's correct
            return view('dashboard', compact('unreadNotifications'));
        } else {
            return redirect()->route('login');
        }
    }
}
