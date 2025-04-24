<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Models\EmploymentRecord;
use App\Notifications\ContractExpiryNotification;

class CheckContractExpiry extends Command
{

    protected $signature = 'contracts:check-expiry';
    protected $description = 'Send notifications for contracts nearing expiry';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $contracts = EmploymentRecord::whereDate('contract_expiry_date', '<=', now()->addDays(30))->get(); // adjust field name

        $hrUsers = User::where('role', 'HR')->get();

        foreach ($contracts as $contract) {
            foreach ($hrUsers as $user) {
                $user->notify(new ContractExpiryNotification($contract));
            }
        }

        $this->info('Contract expiry notifications sent.');
    }
}
