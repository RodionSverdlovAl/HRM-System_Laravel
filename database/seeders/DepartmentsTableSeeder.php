<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
    // Define sample data for the departments table
    $departments = [
    ['title' => 'Marketing'],
    ['title' => 'Sales'],
    ['title' => 'Finance'],
    ['title' => 'Human Resources'],
    ];

    // Insert the sample data into the departments table
    DB::table('departments')->insert($departments);
    }
}
