<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    function author(){
        return $this->belongsToMany(author::class);
    }

    function copy(){
        return $this->hasMany(copy::class);
    }
}