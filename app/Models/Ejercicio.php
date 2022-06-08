<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    //permiso a laravel para modificar varios campos
   
    protected $fillable=[
        'nombre_ejercicio',
        'entreno_id',
        'set_id',
        'rep_id',
        'marca_id',
        'Observaciones'

    ];
    


    public function reps(){
        
        return $this->hasOne(Rep::class);
    }
    
    public function sets()
    {
        return $this->hasOne(Set::class);
    }
    public function marcas()
    {
        return $this->hasOne(Marca::class);
    }
    public function marcaCliente()
    {
        return $this->hasOne(MarcaCliente::class);
    }
}