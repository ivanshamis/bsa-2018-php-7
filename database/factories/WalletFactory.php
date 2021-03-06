<?php

use Faker\Generator as Faker;
use App\Entity\User;

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

$factory->define(App\Entity\Wallet::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
    ];
});
