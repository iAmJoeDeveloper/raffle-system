<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
    protected $fillable =
    [
        'branchOffices_id', 'name', 'description', 'start', 'end', 'voucherMessage', 'status', 'image'
    ];

    public function branch()
    {
        return $this->belongsTo('App\BranchOffice', 'branchOffices_id');
    }

    public function commerces()
    {
        return $this->belongsToMany(Commerce::class);
    }

    public function parameters()
    {
        return $this->hasMany(Parameter::class);
    }

    public function prizes()
    {
        return $this->hasMany(Prize::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
