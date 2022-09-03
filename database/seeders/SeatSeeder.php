<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats =array();
        for ($j=1; $j<= 24 ; $j++) { 
            $seat = [
                'id' => $j,
                'bus_id' => ($j <= 12) ? 1 : 2
            ];
            array_push($seats, $seat);
        }
        DB::table('seats')->insert($seats);
       
    }
}
