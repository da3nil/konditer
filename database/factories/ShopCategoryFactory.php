<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ShopCategory;
use Faker\Generator as Faker;

$factory->define(ShopCategory::class, function (Faker $faker) {
    return [
        'name'          =>  $faker->name,
        'description'   =>  $faker->text,
        'img'           =>  'default.png'
    ];
});
