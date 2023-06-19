<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder
{
    public function run()
    {
        // Define sample data for the users table
        $users = [
            [
                'name' => 'John',
                'surname' => 'Doe',
                'avatar' => null,
                'email' => 'john.doe@example.com',
                'phone' => '555-1234',
                'department_id' => 1,
                'position_id' => 1,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Jane',
                'surname' => 'Doe',
                'avatar' => null,
                'email' => 'jane.doe@example.com',
                'phone' => '555-5678',
                'department_id' => 2,
                'position_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Bob',
                'surname' => 'Smith',
                'avatar' => null,
                'email' => 'bob.smith@example.com',
                'phone' => '555-9012',
                'department_id' => 3,
                'position_id' => 3,
                'password' => Hash::make('password'),
            ],
        ];

        // Insert the sample data into the users table
        DB::table('users')->insert($users);
    }
}
