<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellido',
        'edad',
        'email',
        'password',
        'RM_Historico_Squat',
        'RM_Historico_Bench',
        'RM_Historico_DeadLift'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


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
