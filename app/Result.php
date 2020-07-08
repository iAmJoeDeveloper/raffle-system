<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
      'ticket_id', 'customer_id', 'prize_id'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class,'ticket_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id');
    }

    public function prize()
    {
        return $this->belongsTo(Prize::class,'prize_id');
    }
}
