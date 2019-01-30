<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    public function desenvolvedores() {
        return $this->belongsToMany('App\Desenvolvedor', 'tabela intermediaria')->withPivot('nome do campo');
    }
}
