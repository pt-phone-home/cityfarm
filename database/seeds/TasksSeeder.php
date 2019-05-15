<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Volunteer Sunday',
            'headline' => 'Sign up for volunteering with us',
            'short_description' => 'Come and see us to discuss the opportunities',
            'month' => 'May',
            'date' => '1st',
            'year' => '2019',
            'location' => 'St. Anne\'s City Farm',
            'time_from' => '9am',
            'time_to' => '4:30p,',
            'img' => 'http://placeimg.com/640/480/any',
            'content' => 'Lets get volunteering',
            'link' => 'http://www.youtube.com',
        ]);
        DB::table('tasks')->insert([
            'title' => 'Sunday Fun',
            'headline' => 'Sign up for volunteering with us',
            'short_description' => 'Come and see us to discuss the opportunities',
            'month' => 'June',
            'date' => '2nd',
            'year' => '2019',
            'location' => 'St. Anne\'s City Farm', // not needed
            'time_from' => '9am',
            'time_to' => '4:30p,',
            'img' => 'http://placeimg.com/640/470/any',
            'content' => 'Lets get volunteering',
            'link' => 'http://www.youtube.com',
        ]);
        DB::table('tasks')->insert([
            'title' => 'Volunteer Sunday',
            'headline' => 'Sign up for volunteering with us',
            'short_description' => 'Come and see us to discuss the opportunities',
            'month' => 'July',
            'date' => '3rd',
            'year' => '2019',
            'location' => 'St. Anne\'s City Farm',
            'time_from' => '9am',
            'time_to' => '4:30p,',
            'img' => 'http://placeimg.com/640/460/any',
            'content' => 'Lets get volunteering',
            'link' => 'http://www.youtube.com',
        ]);
        DB::table('tasks')->insert([
            'title' => 'Volunteer Sunday',
            'headline' => 'Sign up for volunteering with us',
            'short_description' => 'Come and see us to discuss the opportunities',
            'month' => 'May',
            'date' => '22nd',
            'year' => '2019',
            'location' => 'St. Anne\'s City Farm',
            'time_from' => '9am',
            'time_to' => '4:30p,',
            'img' => 'http://placeimg.com/640/460/any',
            'content' => 'Lets get volunteering',
            'link' => 'http://www.youtube.com',
        ]);
        DB::table('tasks')->insert([
            'title' => 'Volunteer Sunday',
            'headline' => 'Sign up for volunteering with us',
            'short_description' => 'Come and see us to discuss the opportunities',
            'month' => 'July',
            'date' => '5th',
            'year' => '2019',
            'location' => 'St. Anne\'s City Farm',
            'time_from' => '9am',
            'time_to' => '4:30p,',
            'img' => 'http://placeimg.com/640/460/any',
            'content' => 'Lets get volunteering',
            'link' => 'http://www.youtube.com',
        ]);

    }
}
