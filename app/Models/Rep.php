<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    use HasFactory;

    protected $fillable=[
        'numero_reps'
    ];

    public function ejercicios()
    {
        return $this->belongsToMany(Ejercicio::class);
    }
    
}
