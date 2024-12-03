<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert([
            ['nome'=>"Educacionais"],
            ['nome'=>"Artigos"],
            ['nome'=>"Livros"],
            ['nome'=>"Ebooks"],
            ['nome'=>"Educacionais"],
            
        ]);
    }
}
