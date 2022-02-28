<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    use HasFactory;

    public function ejercicios()
        {
            return $this->belongsToMany('App\Models\Ejercicio');
        }
    
}
