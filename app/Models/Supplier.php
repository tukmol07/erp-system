<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable =
    [
        'company_name',
        'address',
        'email',
        'contact_person',
        'contact_number',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
