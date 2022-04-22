<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreno extends Model
{
    use HasFactory;

<<<<<<< HEAD
=======

>>>>>>> 31d2b8a4a45f5d1c9defcb95d45eff82dd0877d2


    public function ejercicio()
    {
        return $this->hasMany(Ejercicio::class);
    }

    
}
