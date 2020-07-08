<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =
        [
          'branchOffice_id','description', 'status'
        ];

    public function branch()
    {
        return $this->belongsTo('App\BranchOffice', 'branchOffice_id');
    }
}
