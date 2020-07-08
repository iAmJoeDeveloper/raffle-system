<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrizeGroup extends Model
{
    public $table = "prizeGroups";

    protected $fillable =
        [
            'branchOffice_id', 'description', 'status'
        ];

    public function branch()
    {
        return $this->belongsTo(BranchOffice::class, 'branchOffice_id');
    }

    public function prizes()
    {
        return $this->hasMany(Prize::class);
    }
}
