<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    function author(){
        return $this->belongsToMany(goal::class);
    }

    function copy(){
        return $this->hasone(goal::class);
    }
}