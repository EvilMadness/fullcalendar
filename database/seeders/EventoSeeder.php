<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Evento cósmico', 'start' => '2023-06-16 10:00:00', 'end' => '2023-06-16 11:00:00'],
            ['title' => 'Unos Halos', 'start' => '2023-06-17 12:00:00', 'end' => '2023-06-17 14:00:00'],
            ['title' => 'Azar al Geo', 'start' => '2023-06-15 13:00:00', 'end' => '2023-06-15 14:30:00'],
            ['title' => 'Las cocas', 'start' => '2023-06-12 15:00:00', 'end' => '2023-06-12 16:00:00']
        ];
        DB::table('events')->insert($data);
    }
}
