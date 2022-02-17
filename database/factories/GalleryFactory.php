<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Auth\User;
use App\Models\Gallery;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {
    return [
        'title' => $faker->words(4, true),
        'description' => $faker->paragraph,
        'status' => $faker->boolean,
        'created_by' => function () {
            return factory(User::class)->state('active')->create()->id;
        },
    ];
});
