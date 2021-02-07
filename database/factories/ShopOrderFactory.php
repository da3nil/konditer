<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ShopOrder;
use Faker\Generator as Faker;

$factory->define(
    ShopOrder::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, App\Models\User::count()),
        'user_address'  => $faker->address,
        'user_phone'  => $faker->phoneNumber,
        'shop_order_status_id' => $faker->numberBetween(1, \App\Models\ShopOrderStatus::count())
    ];
});
