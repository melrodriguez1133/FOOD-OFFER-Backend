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
        $data1 = [
            [
                'nombreProducto' => 'Leche',
                'descripcion'  => 'leche ultra pasteurisada xd',
                'precio'  => 2622,
                'fechaElaboracion'  => "2022-10-02",
                'fechaVencimiento'  => "2022-10-02",
                'fechaOferta'  => "2022-10-02",
                'stock'  => 14,
                'imagen' => 'Comida',
                'id_categoria' => '1'
            ],
            [
                'nombreProducto' => 'yogurt',
                'descripcion'  => 'yogurt con leche ultra pasteurisada xd',
                'precio'  => 772,
                'fechaElaboracion'  => "2022-10-02",
                'fechaVencimiento'  => "2022-11-02",
                'fechaOferta'  => "2022-10-02",
                'stock'  => 14,
                'imagen' => 'Comida',
                'id_categoria' => '1'
            ],
            [
                'nombreProducto' => 'Pollito',
                'descripcion'  => 'pollito al spiedo re chicken xdddddddddd',
                'precio'  => 267,
                'fechaElaboracion'  => "2022-10-02",
                'fechaVencimiento'  => "2022-12-02",
                'fechaOferta'  => "2022-11-02",
                'stock'  => 14,
                'imagen' => 'Comida',
                'id_categoria' => '2'
            ],
            [
                'nombreProducto' => 'chocolate',
                'descripcion'  => 'chocolatito blanquito xxdddddd',
                'precio'  => 622,
                'fechaElaboracion'  => "2022-10-02",
                'fechaVencimiento'  => "2022-12-02",
                'fechaOferta'  => "2022-11-02",
                'stock'  => 19,
                'imagen' => 'Comida',
                'id_categoria' => '2'
            ],
        ];
        \DB::table('productos')->insert($data1);
    }
}
