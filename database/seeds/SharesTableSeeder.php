<?php

use Illuminate\Database\Seeder;

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
                ],
                [
                    'name'      => 'Coca-Cola',
                    'base_price'     => 5,
                    'amount'     => 155,
                ],
                [
                    'name'      => 'ECORP Corporation',
                    'base_price'     => 500,
                    'amount'     => 25000,
                ],
        ]);
    }
}
