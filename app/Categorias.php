<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function getprodutos() {
        return $this->hasMany('App\Produtos', 'categoria_id', 'id');
    }
}
