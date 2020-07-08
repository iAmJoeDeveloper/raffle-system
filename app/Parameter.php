<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable =
    [
      'raffle_id', 'condition_id', 'value', 'aditionalTickets', 'status'
    ];

    public function conditions()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }

    public function raffles()
    {
        return $this->belongsTo(Raffle::class, 'raffle_id');
    }

}
