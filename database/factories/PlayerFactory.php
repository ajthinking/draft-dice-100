<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Player;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Player::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 10),
        'score' => random_int(0, 4294967295)
    ];
});