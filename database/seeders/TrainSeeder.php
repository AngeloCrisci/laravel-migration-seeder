<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i = 32 ; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->station_departure = $faker->city();
            $newTrain->station_arrival = $faker->city();
            $newTrain->time_of_the_departure = $faker->time();
            $newTrain->day_of_the_departure = $faker->dateTimeBetween('+1 day' , '+2 day');
            $newTrain->time_of_the_arrival = $faker->time();
            $newTrain->day_of_the_arrival = $faker->dateTimeBetween('+2 day' , '+4 day');
            $newTrain->train_code = $faker->bothify('??-####');
            $newTrain->wagons = $faker->numberBetween(1, 20);
            $newTrain->on_time = $faker->boolean();
            $newTrain->suspended = $faker->boolean();
        }

    }
}
