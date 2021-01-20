<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\ShopOrder::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, App\Models\User::count()),
    ];
});
