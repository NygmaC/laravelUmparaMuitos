<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nome' => 'Roupas']);
        DB::table('categorias')->insert(['nome' => 'comida']);
        DB::table('categorias')->insert(['nome' => 'Veiculos']);
        DB::table('categorias')->insert(['nome' => 'Jogos']);
        DB::table('categorias')->insert(['nome' => 'Video Games']);
    }
}
