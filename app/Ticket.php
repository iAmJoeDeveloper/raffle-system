<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['invoice_id', 'raffle_id', 'ticketNumber'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function raffle()
    {
        return $this->belongsTo(Raffle::class, 'raffle_id');
    }
}
