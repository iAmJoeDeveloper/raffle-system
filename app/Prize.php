<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    protected $fillable =
    [
        'raffle_id', 'prizeGroup_id', 'name', 'description', 'quantity', 'value', 'status'
    ];

    public function prizeGroup()
    {
        return $this->belongsTo(PrizeGroup::class, 'prizeGroup_id');
    }

    public function raffle()
    {
        return $this->belongsTo(Raffle::class);
    }
}
