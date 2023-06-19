<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder
{
    public function run()
    {
        // Define sample data for the positions table
        $positions = [
            ['title' => 'Marketing Manager', 'department_id' => 1, 'salary' => 60000],
            ['title' => 'Sales Representative', 'department_id' => 2, 'salary' => 50000],
            ['title' => 'Financial Analyst', 'department_id' => 3, 'salary' => 70000],
            ['title' => 'HR Coordinator', 'department_id' => 4, 'salary' => 45000],
        ];

        // Insert the sample data into the positions table
        DB::table('positions')->insert($positions);
    }
}
