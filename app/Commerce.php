<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    protected $fillable =
        [
            'location_id', 'name', 'legalName','rnc', 'status', 'image'
        ];

    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id');
    }

    public function raffles()
    {
        return $this->hasMany(Raffle::class)->withTimestamps();
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

}
