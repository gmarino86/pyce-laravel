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
                'producto_id' => 1,
                'nombre' => "Bolsas 20x30",
                'descripcion' => "Las bolsas 20x30 son las mas chicas, se usan para....",
                'precio' => 60000,
                'producto_tipo_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'producto_id' => 2,
                'nombre' => "Bolsas 30x40",
                'descripcion' => "Las bolsas 30x40 son ideales para....",
                'precio' => 65000,
                'producto_tipo_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
