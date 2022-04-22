<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    use HasFactory;

    public function ejercicios()
<<<<<<< HEAD
    {
        return $this->belongsToMany(Ejercicio::class);
    }
=======
        {
            return $this->belongsToMany(Ejercicio::class);
        }
>>>>>>> 31d2b8a4a45f5d1c9defcb95d45eff82dd0877d2
    
}
