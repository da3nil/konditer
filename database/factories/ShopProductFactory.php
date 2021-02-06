<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ShopProduct;
use Faker\Generator as Faker;

$factory->define(ShopProduct::class, function (Faker $faker) {
    return [
        'name'          =>  $faker->word,
        'description'   =>  $faker->text,
        'img'           =>  'shop_products/food_default.png',
        'price'         =>  $faker->numberBetween(100, 300),
        'shop_category_id'  =>  $faker->numberBetween(1, App\Models\ShopCategory::count()),
    ];
});
