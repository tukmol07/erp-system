<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Carbon\Carbon;

class ContractExpiryNotification extends Notification
{
    use Queueable;

    protected $contract;

    public function __construct($contract)
    {
        $this->contract = $contract;
    }

    public function via($notifiable)
    {
        return ['database']; // Optional: ['mail', 'database'] if you want email too
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Contract Expiry Alert',
            'message' => 'Contract for ' . $this->contract->employee_name .
                ' is expiring on ' . Carbon::parse($this->contract->contract_expiry_date)->format('Y-m-d'),
            'employee_id' => $this->contract->id,
        ];
    }
}
