<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            [
                'id' =>1,
                'model' => 'Mercedes', 
                'seats_number' => 12
            ],
            [
                'id' =>2,
                'model' => 'Toyota', 
                'seats_number' => 12
            ],

        ]);
    }
}
