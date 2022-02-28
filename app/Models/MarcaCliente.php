<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaCliente extends Model
{
    use HasFactory;

    public function ejercicios()
    {
        return $this->belongsTo('App\Models\Ejercicio');
    }
}
