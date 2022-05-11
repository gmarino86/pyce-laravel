<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'id'    =>  1,
                'name'  =>  'Gaston',
                'email' =>  'gmarino86@hotmail.com',
                'password'  =>  \Hash::make('asdasd'),
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        ]);
    }
}
