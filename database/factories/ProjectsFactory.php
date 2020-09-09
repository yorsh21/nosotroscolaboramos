<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Projects;
use Faker\Generator as Faker;

$factory->define(Projects::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'summary' => $faker->text,
        'description' => $faker->text,
        'score' => $faker->numberBetween(-10000, 10000),
        'website' => $faker->word,
        'social' => $faker->word,
        'status' => $faker->numberBetween(-10000, 10000),
        'category_id' => factory(\App\Category::class),
        'user_id' => factory(\App\User::class),
    ];
});
