<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->insert([
            [
                'id' =>1,
                'name' => 'Cairo-Asyut', 
                'description' => "trip  from  cairo  to  asyut go through  alfayyum and alminya",
                'from_station' => 1,
                'to_station' => 4,
                'bus_id' => 1,
                'start_time' => "1662132643000",
                'end_time' => "1662154243000",
                'status' => 'active',
            ],
            [
                'id' =>2,
                'name' => 'Cairo-Alexandria', 
                'description' => "trip  from  cairo  to  Alexandria go through  benha and tanta",
                'from_station' => 1,
                'to_station' => 7,
                'bus_id' => 2,
                'start_time' => "1662132643000",
                'end_time' => "1662154243000",
                'status' => 'active'
            ],
        ]);
    }
}
