<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // use HasFactory; "va dentro de model" esto se utiliza para tener datos aleatorios
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;
    protected $connection= 'mysql'; // cambiar el archivo q esta en .env
    protected $primaryKey = 'id';// no hace falta ponerlo, por defecto laravel te lo crea
    protected $fillable = [ #poner siempre fillable
        'nombre',
        'apellido',
        'email',
        'celular'
    ];
   
}
