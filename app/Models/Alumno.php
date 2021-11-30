<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function materias(){
        //referenciamos a la clase Alumno con el $this y le decimos que pertenece a muchos con el belongsToMany, en este caso a materias e indicamos la tabla pivot
        return $this->belongsToMany(Materia::class, 'alumno_materia');
    }
}
