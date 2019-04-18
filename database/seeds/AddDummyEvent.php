<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Family Day',
            'start_date' => '2019-04-29',
            'end_date' => '2019-04-29',
            'description' => 'Fun Family Day',
        ]);
        DB::table('events')->insert([
            'title' => 'Volunteer Day',
            'start_date' => '2019-05-01',
            'end_date' => '2019-05-02',
            'description' => 'Volunteer Day',
        ]);
        DB::table('events')->insert([
            'title' => 'Education Day',
            'start_date' => '2019-06-12',
            'end_date' => '2019-06-14',
            'description' => 'Education Day',
        ]);
    }
}
