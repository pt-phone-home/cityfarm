<?php

use Illuminate\Database\Seeder;

class FixturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Fixture::class, 20)->create();
        // $faker = Faker\Factory::create();

        // for ($i = 1; $i <= 20; $i++) {
        //     DB::table('fixtures')->insert([
        //         'title' => $faker->word($nb = 6),
        //         'headline' => $faker->sentence($nbWords = 6),
        //         'short_description' => $faker->sentences(4),
        //         'month' => $faker->month($max = 'now'),
        //         'date' => $faker->dayOfMonth,
        //         'year' => $faker->year($max = 'now'),
        //         'location' => 'St. Anne\'s City Farm',
        //         'time_from' => $faker->time($format = 'h:i', $max = '11:00'),
        //         'time_to' => $faker->time($format = 'h:i', $max = '18:00'),
        //         'img' => $faker->imageUrl($width = 640, $height = 480),
        //         'content' => $faker->paragraphs($nb = 5, $variableNbSentences = true),
        //         'link' => $faker->url,
        //     ]);
        // }
    }
}
