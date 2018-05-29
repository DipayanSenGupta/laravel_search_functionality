<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\developer::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
    ];
});

$factory->define(App\language::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->colorName,
    ];
});

$factory->define(App\programming_language::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});