<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    public function alumnos(){
        //referenciamos a la clase Materia con el $this y le decimos que pertenece a muchos con el belongsToMany, en este caso a alumnos e indicamos la tabla pivot
        return $this->belongsToMany(Alumno::class, 'alumno_materia');
    }
}
