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
        'Marca',
        'Marca_Cliente',
        'Observaciones'

    ];
    */

    public function entrenamiento()
    {
        return $this->belongsTo(Entreno::class);
<<<<<<< HEAD
=======
    }

    public function reps(){
        
        return $this->hasOne(Rep::class);
>>>>>>> 31d2b8a4a45f5d1c9defcb95d45eff82dd0877d2
    }

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