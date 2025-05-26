<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class copy extends Model
{
    function user(){
        return $this->belongsToMany(goal::class);
    }

    function book(){
        return $this->belongsTo(goal::class);
    }
}
