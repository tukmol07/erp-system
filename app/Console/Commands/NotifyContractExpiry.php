<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Console\Command;
use App\Models\EmploymentRecord;
use App\Notifications\ContractExpiryNotification;



class NotifyContractExpiry extends Command
{

    protected $signature = 'notify:contract-expiry';

    protected $description = 'Notify HR of contracts expiring in 5 days';

    public function handle()
    {
        $targetDate = Carbon::now()->addDays(5)->toDateString();

        $expiringEmployees = EmploymentRecord::whereDate('date_hired', $targetDate)->get();

        $hrusers = User::where('role', 'HR')->get();

        foreach ($expiringEmployees as $employee) {
            foreach ($hrusers as $hr) {
                $hr->notify(new ContractExpiryNotification($employee));
            }
        }

        $this->info('Contract expiry notificationsent to HR');
    }
}
