<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_producto')->insert([
            [
                'producto_tipo_id' => 1,
                'nombre' => "Minorista",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'producto_tipo_id' => 2,
                'nombre' => "Mayorista",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
