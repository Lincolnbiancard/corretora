<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SharesTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('shares')->insert(
            [
                [
                    'name'      => 'Jussara Enterprise',
                    'base_price'     => 50,
                    'amount'     => 2000,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name'      => 'Coca-Cola',
                    'base_price'     => 5,
                    'amount'     => 155,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name'      => 'ECORP Corporation',
                    'base_price'     => 500,
                    'amount'     => 25000,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
        ]);
    }
}
