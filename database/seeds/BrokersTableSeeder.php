<?php

use Illuminate\Database\Seeder;

class BrokersTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('brokers')->insert(
            [
                [
                    'name'      => 'Carlos',
                ],
                [
                    'name'      => 'Mario',
                ],
                [
                    'name'      => 'Celita',
                ],
                [
                    'name'      => 'Maria',
                ],
                [
                    'name'      => 'José Aldo',
                ],
                [
                    'name'      => 'Camila',
                ],
                [
                    'name'      => 'Julia',
                ],
                [
                    'name'      => 'Amarindo',
                ],
        ]);
    }
}
