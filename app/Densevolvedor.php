<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Densevolvedor extends Model
{
    public function projetos() {
        //O primeiro parametro é o que vc deseja retornas
        //O segundo parametro é a tabela que vai fazer a ligacao entre projeot e desenvolvedor, já que é um N para N
        return $this->belongsToMany('App\Projeto', 'tabela de ligacao entre Desenvolvedor x Projeto');
    }

    public function projetoscompivot() {
        //O primeiro parametro é o que vc deseja retornas
        //O segundo parametro é a tabela que vai fazer a ligacao entre projeot e desenvolvedor, já que é um N para N
        //Retorna tambem os dados da tabela de ligação
        return $this->belongsToMany('App\Projeto', 'tabela de ligacao entre Desenvolvedor x Projeto')->
        withPivot('nome do campo que deseja retornar');
    }
}
