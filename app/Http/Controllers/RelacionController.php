<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Alumno;
use App\Models\Materia;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function unoamuchos(){
        $productos = Producto::all();
        return view('unoamuchos', compact('productos'));
    }

    public function muchosamuchos(){
        $alumno = Alumno::find(1);
        $materia = Materia::find(2);
        return view('muchosamuchos', compact('alumno', 'materia'));
    }
}
