<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert(
            [
                [
                    'name'      => 'Lincoln',
                    'preferencial_broker'     => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name'      => 'José',
                    'preferencial_broker'     => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name'      => 'Helio',
                    'preferencial_broker'     => 3,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
        ]);
    }
}
