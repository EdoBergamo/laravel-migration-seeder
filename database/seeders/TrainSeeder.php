<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time('H:i:s'),
                'arrival_time' => $faker->time('H:i:s'),
                'train_code' => $faker->unique()->word,
                'carriage_count' => $faker->numberBetween(1,15),
                'on_time' => $faker->boolean,
                'canceled' => $faker->boolean,
            ]);
        }
    }
}
