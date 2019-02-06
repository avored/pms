<?php

use Faker\Generator as Faker;

$factory->define(App\AppModelsProject::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text
    ];
});
