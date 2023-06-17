<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name' => 'Cósmico',
                'email' => 'hola@hola.com',
                'password' => bcrypt('12345'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('users')->insert($data);
    }
}
