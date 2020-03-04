<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            [
                'id' => 1,
                'user_id' => 4,
                'species_id' => 1,
                'name' => 'trevor',
                'sex' => 'male',
                'age' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'species_id' => 3,
                'name' => 'lucy',
                'sex' => 'female',
                'age' => 9,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'species_id' => 2,
                'name' => 'fred',
                'sex' => 'male',
                'age' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'species_id' => 2,
                'name' => 'poppy',
                'sex' => 'male',
                'age' => 15,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'species_id' => 1,
                'name' => 'buddy',
                'sex' => 'male',
                'age' => 5,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'user_id' => 2,
                'species_id' => 1,
                'name' => 'ellie',
                'sex' => 'female',
                'age' => 7,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
