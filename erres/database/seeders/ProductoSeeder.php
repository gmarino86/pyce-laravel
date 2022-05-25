<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                "producto_id"=> 1,
                "nombre"=> "Bolsa Residuo 45x60",
                "descripcion"=> "Bolsa grande para residuos",
                "imagen"=> "residuo45x60.jpg",
                "precio"=> 95000,
                "created_at"=> date('Y-m-d H:i:s'),
                "updated_at"=> date('Y-m-d H:i:s'),
                "producto_tipo_id"=> 1
            ],
            [
                "producto_id"=> 2,
                "nombre"=> "Bolsa Camiseta 40x50",
                "descripcion"=> "Ideal para ir a comprar el pan",
                "imagen"=> "camiseta40x50.jpg",
                "precio"=> 72000,
                "created_at"=> date('Y-m-d H:i:s'),
                "updated_at"=> date('Y-m-d H:i:s'),
                "producto_tipo_id"=> 1
            ],
            [
                "producto_id"=> 3,
                "nombre"=> "Bolsa de Arranque 20x30",
                "descripcion"=> "Ideal para guardar galletitas, yerba, usar para un tachito de tamaño chico, levantar la caca de las mascotas, etc",
                "imagen"=> "arranque20x30.jpg",
                "precio"=> 35000,
                "created_at"=> date('Y-m-d H:i:s'),
                "updated_at"=> date('Y-m-d H:i:s'),
                "producto_tipo_id"=> 1
            ]
        ]);
    }
}
