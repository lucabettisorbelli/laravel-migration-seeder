<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run(Generator $faker)
    // {
    //     for ($i = 0; $i < 10; $i++) {
    //         $newTrain = new Train();
    //         $newTrain->company = $faker->sentence(3);
    //         $newTrain->arrival_station = $faker->city();
    //         $newTrain->save();
    //     }
    // }

    public function run_senza_faker()
    {
        $trains = [
            [
                "company" => "Trenitalia",
                "departure_station" => "Milano",
                "arrival_station" => "Monza",
                "departure_time" => "22:05:00",
                "arrival_time" => "23:15:00",
                "train_code" => "3564"
            ],
            [
                "company" => "FrecciaRossa",
                "departure_station" => "Bari",
                "arrival_station" => "Napoli",
                "departure_time" => "21:44:00",
                "arrival_time" => "23:05:00",
                "train_code" => "4564"
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train["company"];
            $newTrain->departure_station = $train["departure_station"];
            $newTrain->arrival_station = $train["arrival_station"];
            $newTrain->departure_time = $train["departure_time"];
            $newTrain->arrival_time = $train["arrival_time"];
            $newTrain->train_code = $train["train_code"];
            $newTrain->save();
        }
    }
}
