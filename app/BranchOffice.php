<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchOffice extends Model
{
    public $table = "branchOffices";

    protected $fillable = ['image'];

    public function raffles()
    {
        return $this->hasMany(Raffle::class);
    }

    public function prizeGroups()
    {
        return $this->hasMany(PrizeGroup::class);
    }
}
