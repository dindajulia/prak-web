<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $guarded = [];

    public function casts(){
        return $this->hasMany(Cast::class);
    }
}
