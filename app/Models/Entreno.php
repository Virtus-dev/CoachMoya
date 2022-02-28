<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreno extends Model
{
    use HasFactory;

    public function sets()
    {
        return $this->hasOneTrough(Set::class,Ejercicio::class);
    }

    public function reps()
    {
        return $this->hasOneTrough(Rep::class,Ejercicio::class);
    }

    public function marca()
    {
        return $this->hasOneTrough(Marca::class,Ejercicio::class);
    }

    public function marcaCliente()
    {
        return $this->hasOneThrough(MarcaCliente::class,Ejercicio::class);
    }
    
}
