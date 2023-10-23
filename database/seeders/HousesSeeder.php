<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make a seeder for the Houses Model
        // Use the faker library to generate fake data
        // Use the Houses Model to create a new house

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            \App\Models\House::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'rooms' => $faker->numberBetween(1, 10),
                'price' => $faker->numberBetween(100000, 1000000),
                'image' => $faker->imageUrl(640, 480, 'house', true)
            ]);
        }
    }
}
