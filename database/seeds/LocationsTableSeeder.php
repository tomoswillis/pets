<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
                'id' => 1,
                'country_name' => 'United Kingdom',
                'country_code' => 'GB',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'country_name' => 'France',
                'country_code' => 'FR',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'country_name' => 'Italy',
                'country_code' => 'IT',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'country_name' => 'Germany',
                'country_code' => 'DE',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
           
        ]);
    
    }
}
