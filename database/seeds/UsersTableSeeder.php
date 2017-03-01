<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker\Factory::create();
     foreach (range(1,10) as $index) 
     {

         DB::table('users')->insert([
            'name' => $faker->firstName,
            'email' => $faker->unique()->email,
            'password' => bcrypt('hasło'),
            'remember_token' => str_random(10),
            ]);
     }
 }
}
