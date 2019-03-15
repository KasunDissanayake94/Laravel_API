<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model\Product;

$factory->define(App\Model\Product::class, function (Faker\Generator $faker) {

    return [
        'name'=> $faker->word,
        'description'=> $faker->paragraph,
        'price'=> $faker->numberBetween(100,1000),
        'unit'=> $faker-> randomDigit,
        'discount'=> $faker->numberBetween(5,25)

    ];
});

$factory->define(App\Model\Review::class, function (Faker\Generator $faker) {

    return [
        'customer'=> $faker->word,
        'product_id'=> function(){
            return Product::all()->random();
        },
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5)


    ];
});
