<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
     function book(){
        return $this->belongsToMany(goal::class);
    }
}
