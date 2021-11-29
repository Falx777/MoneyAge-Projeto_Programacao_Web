<?php

use Illuminate\Database\Seeder;
use App\Models\Moneyage;

class MoneyageUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Moneyage::class, 10)->create();
        /*
        DB::table('moneyages')->insert([
            'name' => 'Luiz'
            ,
            'email' => 'falx@gmail.com'
            ,
            'password' => 'angrboda'
            ,
            'date' => '2003-03-05'
            ,
            'gender' => 'masculino'
            ,
            'hint' => 'loki"s wife'
            ,
            //'profession' => 'programador',
            'wage' => '1200,00'
            
            ]); */
    }
}
