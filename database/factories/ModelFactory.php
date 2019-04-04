<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Car;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

$factory->define(Car::class, function(Faker $faker){       //uvek je drugi parametar callback i uvek vraca asocijativni niz gde je key naziv atributa
    return[
        "brend" => $faker->name,
        "model" => $faker->imageUrl($width = 640, $height = 480) ,
        "year" => $faker->numberBetween($min = 2010, $max = 2019),
        "maxSpeed" => $faker->numberBetween($min = 200, $max = 400),
        "isAutomatic" => Movie::GENERES[rand(0,count(Movie::GENERES) - 1)],
        "engine" => Movie::GENERES[rand(0,count(Movie::GENERES) - 1)],
        "numberOfDoors" => Movie::GENERES[rand(0,count(Movie::GENERES) - 1)]
    ];
 });