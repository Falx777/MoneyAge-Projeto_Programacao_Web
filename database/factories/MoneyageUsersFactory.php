<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Moneyage;
use Faker\Generator as Faker;

/*$factory->define(Model::class, function (Faker $faker) {
    return [
        
    ];
});
*/
$factory->define(Moneyage::class, function (Faker $faker) {
    return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'email_verified_at' => now(),
    'password' => Hash::make('12345678'), // password
    'remember_token' => Str::random(10),
    'date' => $faker->date,
    'gender' => 'male',
    'hint' => $faker->name,
    //'profession' => $faker->name,
    'wage' => Str::rand(1000, 3000)
    ];
    });
