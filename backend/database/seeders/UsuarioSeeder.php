<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
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
                'nombre' => 'berni',
                'edad' => 20,
                'apellido' => 'vargas',
                'direccion' => 'sacaba-chapareeeeeeeeeeeeeeeeee',
                'celular' => 76434456,
                'genero' => 'hombre',
                'ci' => '868686864',
                'expedido' => 'cbba'  ,
                'email' => 'bernis@gmail.com',
                'password' => 'pepito777' ,
            ],
        ];
        \DB::table('usuarios')->insert($data);
    }
}
