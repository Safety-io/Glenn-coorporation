<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // generate 100 houses with faker
        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('houses')->insert([
                'name' => $faker->name,
                'address' => $faker->address,
                'rooms' => $faker->numberBetween(1, 10),
                'bathrooms' => $faker->numberBetween(1, 10),
                'price' => $faker->numberBetween(100000, 1000000),
                'image' => 'houses/' . $faker->numberBetween(1, 10) . '.jpg',
            ]);
        }

    }
}
