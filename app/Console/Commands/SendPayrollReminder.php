<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Notifications\PayrollReminderNotification;

class SendPayrollReminder extends Command
{
    protected $signature = 'notify:payroll-reminder';
    protected $description = 'Send payroll reminder to HR users on the 25th of each month';

    public function handle()
    {
        $hrUsers = User::whereHas('roles', function ($query) {
            $query->where('name', 'HR');
        })->get();

        foreach ($hrUsers as $user) {
            $user->notify(new PayrollReminderNotification());
        }

        $this->info('Payroll reminder sent to HR.');
    }
}
