<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blog')->insert([
            [
                'blog_id'   => 1,
                'titulo'    => "Humedales",
                'texto'     => "Los humedales son zonas vitales para la supervivencia humana,
                retienen y almacenan agua apta para el consumo humano y la producción; actúan como esponjas,
                amortiguando el efecto de las tormentas y las inundaciones. Además, sostienen una rica
                biodiversidad y almacenan más carbono que ningún otro ecosistema.",
                'imagen'    => "humedales.jpg",
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ],
            [
                'blog_id'   => 2,
                'titulo'    => "Que Reciclo",
                'texto'     => "QUERECICLO es una empresa recuperadora de informática y electrónica la cual actualmente trabaja con particulares y empresas e  interactúa con cooperativas y fundaciones.",
                'imagen'    => "queReciclo.jpg",
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ]
        ]);
    }
}
