<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;


    //Nombre de la tabla para la que va a funcionar el modelo
    protected $table="alumnos";
    //Datos que se mostraran en los objetos Jasón
    protected $fillable=['nombre','edad','direccion','telefono','carrera'];
}
