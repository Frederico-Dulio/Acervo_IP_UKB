<?php

namespace Database\Seeders;

use App\Models\Categoria;
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
        Categoria::create(['nome_categoria'=>'Romance']);
        Categoria::create(['nome_categoria'=>'Ficção Cientifíca']);
        Categoria::create(['nome_categoria'=>'Fantasia']);
        Categoria::create(['nome_categoria'=>'Mistério']);
        Categoria::create(['nome_categoria'=>'Aventura']);
        Categoria::create(['nome_categoria'=>'Terror']);
        Categoria::create(['nome_categoria'=>'Não-Ficção']);
        Categoria::create(['nome_categoria'=>'Infantil']);
        Categoria::create(['nome_categoria'=>'Acadêmicos e Técnicos']);
        Categoria::create(['nome_categoria'=>'Outros Gêneros']);

    }
}
