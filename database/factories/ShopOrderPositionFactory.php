<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ShopOrderPosition;
use Faker\Generator as Faker;

$factory->define(ShopOrderPosition::class, function (Faker $faker) {
    return [
        'shop_product_id'   =>  $faker->numberBetween(1, App\Models\ShopProduct::count()),
        'shop_order_id' =>  $faker->numberBetween(1, App\Models\ShopOrder::count()),
    ];
});
