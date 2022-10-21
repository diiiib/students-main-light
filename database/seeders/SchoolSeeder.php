<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;;
use Faker\Factory;

class SchoolSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($x = 0; $x < 11; $x++){
            DB::table('school')->insert([
            'Username' => $faker->userName(),
            'email' =>$faker->freeEmailDomain(),
            'password' =>$faker->password(5, 10),
            'phone' =>$faker->PhoneNumber(),
        ]);
    }
}
}