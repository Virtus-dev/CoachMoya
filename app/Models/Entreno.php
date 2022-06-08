<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreno extends Model
{
    use HasFactory;

    protected $fillable=[
      
      'user_id',
      'microciclo',
      'dia_de_la_semana'  

    ];

    

    
}
