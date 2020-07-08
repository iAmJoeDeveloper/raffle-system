<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'name', 'status'
        ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
