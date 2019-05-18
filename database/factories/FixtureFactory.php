<?php

use Faker\Generator as Faker;

$factory->define(App\Fixture::class, function (Faker $faker) {

    // $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return [
        'title' => $faker->words($nb = 3),
        'headline' => $faker->words($nb = 6),
        'short_description' => $faker->sentences($nb = 4),
        'month' => $faker->words($nb = 1),
        'date' => $faker->dayofMonth,
        'year' => $faker->numberBetween($min = 2019, $max = 2020),
        'location' => 'St. Anne\'s City Farm',
        'time_from' => $faker->time($format = 'H:i', $max = '11:00'),
        'time_to' => '18:00',
        'img' => $faker->imageUrl($width = 640, $height = 480),
        'content' => $faker->paragraphs($nb = 5, $variableNbSentences = true),
        'link' => $faker->url,
    ];
});
