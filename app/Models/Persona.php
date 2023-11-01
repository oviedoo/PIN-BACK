<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable = [ #poner siempre fillable
        'nombre',
        'apellido',
        'email',
        'celular'
    ];
   
}
