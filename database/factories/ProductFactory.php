<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'productName' => $faker->text(100),
        'productId' => $faker->text(50),
        'description' =>$faker->text(200)
    ];
});
