<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function productos(){
        /* Se hace referencia a la clase (categoría en este caso), con el this y con el hasMany decimos que una categoría tiene muchos productos */
        return $this->hasMany(Producto::class, 'id');
    }
}
