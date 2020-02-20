<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'location_id' => 1,
                'name' => 'John',
                'email' => 'john@pets.test',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'remember_token' => null,
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'location_id' => 2,
                'name' => 'Philip',
                'email' => 'philip@pets.test',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'remember_token' => null,
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'location_id' => 3,
                'name' => 'Jess',
                'email' => 'jess@pets.test',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'remember_token' => null,
                'updated_at' => now(),
                'deleted_at' => null,
            ],
           
        ]);
    
    }
}
