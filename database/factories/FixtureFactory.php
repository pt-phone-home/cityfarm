<?php

use Faker\Generator as Faker;

$factory->define(App\Fixture::class, function (Faker $faker) {

    // $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'headline' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'short_description' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'date' => $faker->date($format = 'Y-m-d', $min = '2019-06-01', $max = '2020-12-30'),
        'location' => 'St. Anne\'s City Farm',
        'time_from' => $faker->time($format = 'H:i', $max = '11:00'),
        'time_to' => $faker->time($format = 'H:i', $max = '18:00'),
        'img' => $faker->imageUrl($width = 640, $height = 480),
        'content' => $faker->paragraphs($nb = 5, $variableNbSentences = true),
        'link' => $faker->url,
    ];
});
