<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'name'
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
