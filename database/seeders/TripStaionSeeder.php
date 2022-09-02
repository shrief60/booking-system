<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripStaionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trip_staions')->insert([
            [
                'id' =>1,
                'trip_id' => 1, 
                'station_id' => 1,
                'order' => 1,
                'price' => 20.0
            ],
            [
                'id' =>2,
                'trip_id' => 1, 
                'station_id' => 2,
                'order' => 2,
                'price' => 20.0
            ],
            [
                'id' =>3,
                'trip_id' => 1, 
                'station_id' => 3,
                'order' => 3,
                'price' => 20.0
            ],
            [
                'id' =>4,
                'trip_id' => 1, 
                'station_id' => 4,
                'order' => 4,
                'price' => 20.0
            ],
            [
                'id' =>5,
                'trip_id' => 2, 
                'station_id' => 1,
                'order' => 1,
                'price' => 20.0
            ],
            [
                'id' =>6,
                'trip_id' => 2, 
                'station_id' => 5,
                'order' => 2,
                'price' => 20.0
            ],
            [
                'id' =>7,
                'trip_id' => 2, 
                'station_id' => 6,
                'order' => 3,
                'price' => 20.0
            ],
            [
                'id' =>8,
                'trip_id' => 2, 
                'station_id' => 7,
                'order' => 4,
                'price' => 20.0
            ]
        ]);
    }
}
