<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'descripcion' => 'Comida'
            ],
            [
                'descripcion' => 'Postres'
            ],
            [
                'descripcion' => 'Bebidas'
            ],
            [
                'descripcion' => 'Congelados'
            ],
            [
                'descripcion' => 'Lacteos'
            ],
        ];
        \DB::table('categorias')->insert($data);
    }
}
