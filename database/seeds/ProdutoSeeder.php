<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
        ['nome' => 'Produto 1 ', 'preco'=>100, 'estoque'=>4, 'categoria_id'=>1]);

        DB::table('produtos')->insert(
        ['nome' => 'Produto 2', 'preco'=>100, 'estoque'=>4, 'categoria_id'=>4]);

        DB::table('produtos')->insert(
        ['nome' => 'Produto 3', 'preco'=>100, 'estoque'=>4, 'categoria_id'=>3]);

        DB::table('produtos')->insert(
        ['nome' => 'Produto 4', 'preco'=>100, 'estoque'=>4, 'categoria_id'=>2]);

        DB::table('produtos')->insert(
        ['nome' => 'Produto 5 ', 'preco'=>100, 'estoque'=>4, 'categoria_id'=>5]);
       
    }
}
