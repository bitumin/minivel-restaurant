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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->colorName,
        'order' => $faker->numberBetween(0, 100),
        'cols' => $faker->numberBetween(2, 3),
        'active' => $faker->boolean(90),
        'hiddenxs' => $faker->boolean(90)
    ];
});

$factory->define(App\Item::class, function (Faker\Generator $faker) {
    return [
        'image_filename' => $faker->imageUrl(240, 240, 'food', true),
        'name' => $faker->lastName,
        'description' => $faker->paragraph(),
        'order' => $faker->numberBetween(0, 100),
        'price' => $faker->randomFloat(2, 0, 40),
        'active' => $faker->boolean(90),
        'hiddenxs' => $faker->boolean(90),
        'categories_id' => App\Category::orderByRaw('RAND()')->first()->value('id')
    ];
});

$factory->define(App\Slide::class, function (Faker\Generator $faker) {
    return [
        'image_filename' => $faker->imageUrl(1920, 1080, 'nightlife', true),
        'order' => $faker->numberBetween(0, 100),
        'active' => $faker->boolean(90),
    ];
});
