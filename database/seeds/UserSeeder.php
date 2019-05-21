<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();
        DB::table('users')->insert([
            'name' => 'Peter Tiernan',
            'email' => 'ptiernan@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
