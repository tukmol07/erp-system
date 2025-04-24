<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;

class PayrollReminderNotification extends Notification
{
    public function via($notifiable)
    {
        return ['database']; // You can also add 'mail' here if needed
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Payroll Reminder',
            'body' => 'Please update the payroll records for this month.',
            'url' => route('hr.payroll.index')
        ];
    }
}
