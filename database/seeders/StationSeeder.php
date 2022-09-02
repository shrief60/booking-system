<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stations')->insert([
            [
                'id' =>1,
                'name' => 'Cairo', 
                'distance' => 10
            ],
            [
                'id' =>2,
                'name' => 'AlFayyum', 
                'distance' => 12
            ],
            [
                'id' =>3,
                'name' => 'AlMinya', 
                'distance' => 12
            ],
            [
                'id' =>4,
                'name' => 'Asyut', 
                'distance' => 12
            ],
            [
                'id' =>5,
                'name' => 'benha', 
                'distance' => 12
            ],
            [
                'id' =>6,
                'name' => 'tanta', 
                'distance' => 12
            ],
            [
                'id' =>7,
                'name' => 'Alexandria', 
                'distance' => 12
            ],

        ]);
    }
}
