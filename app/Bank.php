<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'name', 'image' ,'status'
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
