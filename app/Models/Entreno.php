<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreno extends Model
{
    use HasFactory;




    public function ejercicio()
    {
        return $this->hasMany(Ejercicio::class);
    }

    
}
