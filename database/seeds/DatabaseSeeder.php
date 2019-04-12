<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
         $this->call(BrokersTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(SharesTableSeeder::class);
    }
}
