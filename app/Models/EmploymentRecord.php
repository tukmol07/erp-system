<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'employee_number',
        'visa_number',
        'category_resident',
        'resident_number',
        'nationality',
        'date_arrival',
        'date_hired',
        'contract_expiry_date',
        'kiwa_contract_number',
        'salary',
        'educational_background',
        'skills',
        'ticket_provided',
        'residence_renewal',
    ];

    protected $casts = [
        'contract_expiry_date' => 'date',
    ];


    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }
}
