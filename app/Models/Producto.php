<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categorias(){
        /* Un producto pertecene a una categoria */
        return $this->belongsTo(Categoria::class,'id_categoria');
    }
}
