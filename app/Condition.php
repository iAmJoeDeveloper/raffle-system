<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = [
        'conditionType', 'name', 'status'
    ];

    public function parameters()
    {
        return $this->hasMany(Parameter::class);
    }
}
