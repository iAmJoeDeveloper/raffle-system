<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'raffle_id','commerce_id', 'customer_id', 'paymentMethod_id', 'bank_id', 'card_id', 'invoiceNumber', 'invoiceDate', 'image'
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'customer_id');
    }

    public function sorteos()
    {
        return $this->belongsTo('App\Raffle','raffle_id');
    }

    public function comercio()
    {
        return $this->belongsTo('App\Commerce','commerce_id');
    }

    public function payment()
    {
        return $this->belongsTo('App\PaymentMethod','paymentMethod_id');
    }

    public function bank()
    {
        return $this->belongsTo('App\Bank','bank_id');
    }

    public function card()
    {
        return $this->belongsTo('App\Card','card_id');
    }

    public function raffle()
    {
        return $this->belongsTo('App\Raffle','raffle_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
