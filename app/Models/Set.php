<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    protected $fillable=[
        'numero_sets'
    ];

    public function ejercicios()
    {
        return $this->belongsToMany(Ejercicio::class);
    }
}
