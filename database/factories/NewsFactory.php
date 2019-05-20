<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = false),
        'headline' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'body' => $faker->paragraphs($nb = 7, $asText = true),
        'img' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
