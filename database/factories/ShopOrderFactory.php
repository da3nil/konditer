<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ShopOrder;
use Faker\Generator as Faker;

$factory->define(
    ShopOrder::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, App\Models\User::count()),
    ];
});
