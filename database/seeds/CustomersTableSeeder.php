<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert(
            [
                [
                    'name'      => 'Lincoln',
                    'preferencial_broker'     => 1,
                ],
                [
                    'name'      => 'José',
                    'preferencial_broker'     => 2,
                ],
                [
                    'name'      => 'Helio',
                    'preferencial_broker'     => 3,
                ],
        ]);
    }
}
