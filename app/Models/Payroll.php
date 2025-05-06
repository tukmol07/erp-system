<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'month',
        'basic_salary',
        'allowances',
        'deductions',
        'overtime_hours',
        'overtime_rate',
        'overtime_pay',
        'bonus',
        'net_salary',
        'remarks',
    ];

    public function employee()
    {
        return $this->belongsTo(EmploymentRecord::class, 'employee_id');
    }
}
