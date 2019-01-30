<?php


use App\Categorias;
use App\Produtos;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', function () {
    $cat = Categorias::all();
    foreach($cat as $c) {
        //echo $c;
        $produtos = $c->getprodutos;
        if(count($produtos) > 0){
            foreach($produtos as $p) {
                echo "Nome do produto" . $p->nome . "<br>";
            }
        }
    }
});

Route::get('/adicionar', function () {
    $cat = Categorias::find(1);
    $produto = new Produto();
    $produto->nome = "Produto 10";
    $produto->estoque = 10;
    $produto->preco = 20;
    $produto->categoria()->associate($cat);
    $produto->save();  
});

Route::get('/alocar', function (){
    $p = Projeto::find(4);
    if(isset($p)){
        //Passando ali para a tabela associativa o ID do desenvolvedor e o ID do projeto vai 
        // automaticamente pois está sendo feito dentro de projeto
        //$p->desenvolvedor()->attach(1, ['outra coluna' => 'valor']);

        //Varios registros
        $p->desenvolvedor()->attach([1, ['outra coluna' => 'valor'],
            2, ['outra coluna' => 'valor'],
            3, ['outra coluna' => 'valor'],
            4, ['outra coluna' => 'valor']
        ]);
    }
});

Route::get('/desalocar', function (){
    $p = Projeto::find(4);
    if(isset($p)){
        //Passando ali para a tabela associativa o ID do desenvolvedor e o ID do projeto vai 
        // automaticamente pois está sendo feito dentro de projeto
        //$p->desenvolvedor()->attach(1, ['outra coluna' => 'valor']);

        //Varios registros
        $p->desenvolvedor()->deatach([1,2,3]);
    }
});