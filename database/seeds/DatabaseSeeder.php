<?php

use Illuminate\Database\Seeder;
use App\Models\Moneyage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(MoneyageUsersTableSeeder::class);
        factory(\App\Models\Moneyage::class, 8)->create();
        //factory(MoneyageUsersFactory::class, 8)->create();
    }
}
