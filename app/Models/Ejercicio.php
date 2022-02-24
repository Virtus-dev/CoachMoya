<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    //permiso a laravel para modificar varios campos
   /*
    protected $fillable=[
        'Nombre_Ejercicio',
        'Sets',
        'Reps',
        'RM_Historico',
        'Marca',
        'Marca_Cliente',
        'Observaciones'

    ];
    */

    public function entrenos(){
        
        return $this->morphToMany(Entreno::class,'trainable')
    }

}
