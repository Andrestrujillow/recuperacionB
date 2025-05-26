<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    function copy(){
        return $this->belongsToMany(copy::class);
    }
}
